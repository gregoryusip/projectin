@extends('layouts.main')

@section('container')
    <div class="container mb-5 edit-profile-form-box p-5">
        <h6 class="text-start mb-5"><a href="/profile/{{ $user->username }}"><i class="uil uil-arrow-left"></i> Kembali ke Profile</a></h6>

        {{-- FORM BUAT PEKERJAAN --}}
        <div class="row mb-3 justify-content-center">
            <div class="col-md-12 col-lg-12">
                <h1>Buat Pekerjaan</h1>
                <p>Informasi ini akan berguna bagi pembeli untuk mengetahui pekerjaan yang kamu miliki.</p>
            </div>
        </div>

        <form action="/dashboard/jobs" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="imgs" class="form-label">Pic 1</label>
                    <input class="form-control" type="file" id="imgs" name="imgs[]" onchange="previewImage()">
                </div>
                <div class="col-md-2">
                    <label for="imgs" class="form-label">Pic 2</label>
                    <input class="form-control" type="file" id="imgs" name="imgs[]" onchange="previewImage()">
                </div>
                <div class="col-md-2">
                    <label for="imgs" class="form-label">Pic 3</label>
                    <input class="form-control" type="file" id="imgs" name="imgs[]" onchange="previewImage()">
                </div>
                <div class="col-md-2">
                    <label for="imgs" class="form-label">Pic 4</label>
                    <input class="form-control" type="file" id="imgs" name="imgs[]" onchange="previewImage()">
                </div>
                <div class="col-md-2">
                    <label for="imgs" class="form-label">Pic 5</label>
                    <input class="form-control" type="file" id="imgs" name="imgs[]" onchange="previewImage()">
                </div>
                <div class="col-md-2">
                    <label for="imgs" class="form-label">Pic 6</label>
                    <input class="form-control" type="file" id="imgs" name="imgs[]" onchange="previewImage()">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-lg-0">
                    <label for="title" class="form-label">Judul Pekerjaan</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" aria-describedby="title" required>
                    <div id="title" class="form-text">Contoh: Membuat desain logo, Mengedit clip video</div>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-lg-0">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" aria-describedby="slug" disabled readonly>
                    <div id="slug" class="form-text">(Generate secara otomatis)</div>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-lg-0">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    {{-- <div id="job" class="form-text">Contoh: Basic, Conversational, Fluent, Native</div> --}}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12 mb-lg-0">
                    <label for="description" class="form-label">Deskripsi Pekerjaan</label>
                    {{-- <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" aria-describedby="description" rows="7" required>{{ old('description', $user->description) }}</textarea>
                    <div id="description" class="form-text">(Penjelasan Pekerjaan)</div>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror --}}
                    <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                    <trix-editor input="description"></trix-editor>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-lg-0">
                    <label for="job_style" class="form-label">Style Pekerjaan</label>
                    <input type="text" class="form-control @error('job_style') is-invalid @enderror" id="job_style" name="job_style" value="{{ old('job_style') }}" aria-describedby="job_style" required>
                    <div id="job_style" class="form-text">Contoh: Minimalist, Abstract, Gaming Videos, Exercise Videos</div>
                    @error('job_style')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-lg-0">
                    <label for="file_format" class="form-label">File Format</label>
                    <input type="text" class="form-control @error('file_format') is-invalid @enderror" id="file_format" name="file_format" value="{{ old('file_format') }}" aria-describedby="file_format" required>
                    <div id="file_format" class="form-text">Contoh: PSD, JPG, MP4, docx, PDF</div>
                    @error('file_format')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-lg-0">
                    <label for="package_name" class="form-label">Nama Paket</label>
                    <input type="text" class="form-control @error('package_name') is-invalid @enderror" id="package_name" name="package_name" value="{{ old('package_name') }}" aria-describedby="package_name" required>
                    <div id="package_name" class="form-text">Contoh: Basic, Silver, Gold Package</div>
                    @error('package_name')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-3 mb-3 mb-lg-0">
                    <label for="job_delivery" class="form-label">Lama Pengerjaan</label>
                    <input type="text" class="form-control @error('job_delivery') is-invalid @enderror" id="job_delivery" name="job_delivery" value="{{ old('job_delivery') }}" aria-describedby="job_delivery" required>
                    <div id="job_delivery" class="form-text">Contoh: 2,3 (Hari)</div>
                    @error('job_delivery')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-3 mb-lg-0">
                    <label for="revision" class="form-label">Jumlah Revisi</label>
                    <input type="text" class="form-control @error('revision') is-invalid @enderror" id="revision" name="revision" value="{{ old('revision') }}" aria-describedby="revision" required>
                    <div id="revision" class="form-text">Contoh: 2,3 (Revisi)</div>
                    @error('revision')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <div class="col-md-6 mb-lg-0">
                    <label for="package_description" class="form-label">Deskripsi Paket</label>
                    <textarea class="form-control @error('package_description') is-invalid @enderror" id="package_description" name="package_description" aria-describedby="package_description" rows="3" required>{{ old('package_description') }}</textarea>
                    <div id="package_description" class="form-text">(Isi dari paket, max: 25 kata)</div>
                    @error('package_description')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-lg-0">
                    <label for="price" class="form-label">Harga</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp</span>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" aria-describedby="price" required>
                    </div>
                    <div id="price" class="form-text">Contoh: 150.000 (IDR)</div>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <button type="submit" class="button-submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/jobs/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function (e) {
            e.preventDefault();
        });
    </script>
@endsection
