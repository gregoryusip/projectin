@extends('layouts.main')

@section('container')
<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10 col-lg-8 col-xl-6 payment-box px-3 py-3 px-md-5 py-md-4 text-center">
            <img src="/img/icon/checked.png" alt="" class="payment-success-icon mb-2">
            <h3 class="mb-2">Pembayaran Sukses</h3>
            <h6 class="pb-3 border-bottom">Pesanan anda akan diteruskan ke Freelancer</h6>

            <div class="row mt-3">
                <div class="col-5 col-md-4 text-start">
                    <p>ID Transaksi</p>
                </div>
                <div class="col-7 col-md-8 text-end">
                    <h6>1234567892</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-4 text-start">
                    <p>Tipe Pembayaran</p>
                </div>
                <div class="col-7 col-md-8 text-end">
                    <h6>Kartu Kredit</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-4 text-start">
                    <p>Bank</p>
                </div>
                <div class="col-7 col-md-8 text-end">
                    <h6>BCA</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-4 text-start">
                    <p>No. Handphone</p>
                </div>
                <div class="col-7 col-md-8 text-end">
                    <h6>{{ auth()->user()->phone_number }}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-4 text-start">
                    <p>Email</p>
                </div>
                <div class="col-7 col-md-8 text-end overflow-auto">
                    <h6>{{ auth()->user()->email }}</h6>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-5 col-md-4 text-start">
                    <p>Jumlah</p>
                </div>
                <div class="col-7 col-md-8 text-end overflow-auto">
                    <h6>@currency($job->price)</h6>
                </div>
            </div>

            <a href="/">
                <button type="button" class="button-continue">
                    Kembali ke Home
                </button>
            </a>
        </div>
    </div>
</div>
@endsection
