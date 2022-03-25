@extends('layouts.main')

@section('container')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10 payment-box px-3 py-3 px-md-5 py-md-5">
            <div class="row">
                <div class="col-md-5 px-3 border-end">
                    <div class="row pb-3 border-bottom">
                        <img src="/img/icon/payment/midtrans.png" alt="" class="midtrans-logo">
                    </div>

                    <div class="row my-3 pb-3 border-bottom">
                        <div class="col-4">
                            <h5>Jumlah</h5>
                        </div>
                        <div class="col-8 text-end">
                            <h2>@currency($job->price)</h2>
                        </div>
                    </div>

                    <div class="row mb-3 pb-3 border-bottom">
                        <h5 class="mb-3">Produk / Jasa</h5>
                        <div class="mb-2 pb-0">
                            <h6 class="mb-0 pb-0">Freelancer</h6>
                            <p class="mb-0">{{ $job->user->full_name }}</p>
                        </div>
                        <div class="mb-2">
                            <h6 class="mb-0 pb-0">Nama Jasa</h6>
                            <p class="mb-0">{{ $job->title }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <h5 class="mb-3">Pembeli</h5>
                        <div class="col-lg-6 mb-2 pb-0">
                            <h6 class="mb-0 pb-0">Nama</h6>
                            <p class="mb-0">{{ auth()->user()->full_name }}</p>
                        </div>
                        <div class="col-lg-6 mb-2 pb-0">
                            <h6 class="mb-0 pb-0">No. Handphone</h6>
                            <p class="mb-0">{{ auth()->user()->phone_number }}</p>
                        </div>
                        <div class="mb-2">
                            <h6 class="mb-0 pb-0">Email</h6>
                            <p class="mb-0">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 px-3">
                    <div class="row pb-3 border-bottom align-items-center">
                        <div class="col-md-6">
                            <h2>Pembayaran</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            <h5>Kartu Kredit</h5>
                        </div>
                    </div>

                    <div class="d-flex mt-5 mb-3 justify-content-center align-items-center">
                        <img src="/img/icon/payment/visa.svg" alt="" class="cc-logo">
                        <img src="/img/icon/payment/mastercard.svg" alt="" class="cc-logo mx-2">
                        <img src="/img/icon/payment/jcb.svg" alt="" class="cc-logo">
                    </div>

                    <form action="/jobs/{{ $job->slug }}/payment/success">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <label for="cc_number" class="form-label">Nomor Kartu</label>
                                <input type="text" class="form-control @error('cc_number') is-invalid @enderror" id="cc_number" name="cc_number" placeholder="1234 5678 9012 3456" onkeypress="return checkDigit(event)" required>
                                {{-- <div id="cc_number" class="form-text">Contoh: Minimalist, Abstract, Gaming Videos, Exercise Videos</div> --}}
                                @error('cc_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}.
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-lg-0">
                                <label for="cc_type" class="form-label">Jenis Kartu</label>
                                <select class="form-select" name="cc_type">
                                    <option value="1" selected>Visa</option>
                                    <option value="2">MasterCard</option>
                                    <option value="3">JCB</option>
                                    <option value="4">American Express</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <label for="cc_expired" class="form-label">Berlaku Hingga</label>
                                <input type="text" class="form-control @error('cc_expired') is-invalid @enderror" id="cc_expired" name="cc_expired" placeholder="08/23" onkeypress="myFunction()" maxlength="5" required>
                                @error('cc_expired')
                                    <div class="invalid-feedback">
                                        {{ $message }}.
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-lg-0">
                                <label for="cc_cvv" class="form-label">CVV</label>
                                <input type="password" class="form-control @error('cc_cvv') is-invalid @enderror" id="cc_cvv" name="cc_cvv" placeholder="****" aria-describedby="cc_cvv" maxlength="4" required>
                                @error('cc_cvv')
                                    <div class="invalid-feedback">
                                        {{ $message }}.
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 mb-3 mb-lg-0">
                                <label for="cc_name" class="form-label">Nama Pemegang Kartu</label>
                                <input type="text" class="form-control @error('cc_name') is-invalid @enderror" id="cc_name" name="cc_name" placeholder="Jane Doe" aria-describedby="cc_name" required>
                                @error('cc_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}.
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 pb-0">
                            <button type="submit" class="button-continue">
                                Konfirmasi Pembayaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function cc_format(value) {
        var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
        var matches = v.match(/\d{4,16}/g);
        var match = matches && matches[0] || ''
        var parts = []
        for (i=0, len=match.length; i<len; i+=4) {
            parts.push(match.substring(i, i+4))
        }
        if (parts.length) {
            return parts.join(' ')
        } else {
            return value
        }
    }

    onload = function() {
        document.getElementById('cc_number').oninput = function() {
            this.value = cc_format(this.value)
        }
    }

    function checkDigit(event) {
        var code = (event.which) ? event.which : event.keyCode;

        if ((code < 48 || code > 57) && (code > 31)) {
            return false;
        }

        return true;
    }

    function myFunction() {
        var expire_date = document.getElementById('cc_expired').value;
        if(expire_date.length == 2){
            document.getElementById('cc_expired').value = expire_date +'/';
        }
    }
</script>
@endsection
