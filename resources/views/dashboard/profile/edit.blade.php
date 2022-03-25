@extends('layouts.main')

@section('container')
    <div class="container mb-5 edit-profile-form-box p-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <h6 class="text-start mb-5"><a href="/profile/{{ $user->username }}"><i class="uil uil-arrow-left"></i> Kembali ke Profile</a></h6>

        {{-- FORM INFORMASI PRIBADI --}}
        <div class="row mb-3 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h1>Informasi Pribadi</h1>
                <p>Informasi ini akan berguna bagi pembeli untuk mengetahui diri kamu lebih dalam.</p>
            </div>
        </div>

        <form action="/profile/{{ $user->username }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3 justify-content-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                    <div class="">
                        <label for="photo_profile" class="form-label">Photo Profile</label>
                        <input type="hidden" name="oldImage" value="{{ $user->photo_profile }}">
                        @if($user->photo_profile)
                        <img src="{{ asset('storage/' . $user->photo_profile) }}" class="img-preview img-fluid d-block mb-3 edit-profile-img">
                        @else
                        <img class="img-preview img-fluid d-block mb-3">
                        @endif
                        <input class="form-control" type="file" id="photo_profile" name="photo_profile" onchange="previewImage()">
                    </div>
                    {{-- <img
                    src="/img/freelancer/baesuzy.png"
                    alt=""
                    class="edit-profile-img img-fluid"
                    /> --}}
                </div>
                <div class="col-md-6 col-lg-5 mb-lg-0">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $full_name) }}" aria-describedby="name" required>
                        <div id="name" class="form-text">Contoh: Jane Doe</div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" aria-describedby="email" required readonly>
                        <div id="email" class="form-text">Contoh: jane.doe@gmail.com</div>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                    <div class="">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username) }}" aria-describedby="username" required readonly>
                        <div id="username" class="form-text">Contoh: jane.doe</div>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}.
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                    <label for="role" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" value="{{ old('role', $user->role) }}" aria-describedby="role" required>
                    <div id="role" class="form-text">Contoh: Illustrator, Programmer, Trainer</div>
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-5 mb-lg-0">
                    <label for="phone_number" class="form-label">No. Handphone</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" aria-describedby="phone_number" required>
                    <div id="phone_number" class="form-text">Contoh: 081312121313</div>
                    @error('phone_number')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                    <label for="university" class="form-label">University</label>
                    <input type="text" class="form-control @error('university') is-invalid @enderror" id="university" name="university" value="{{ old('university', $user->university) }}" aria-describedby="university" required>
                    {{-- <div id="university" class="form-text">Contoh: Illustrator, Programmer, Trainer</div> --}}
                    @error('university')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-5 mb-lg-0">
                    <label for="region_id" class="form-label">Region</label>
                    <select class="form-select" name="region_id" id="region_id">
                        @foreach ($countries as $key=>$country)
                            @if (old('region_id', $region_id) == $key)
                                <option value="{{ $key }}" selected>{{ $country }}</option>
                            @else
                                <option value="{{ $key }}" >{{ $country }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('region_id')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                    <label for="quote" class="form-label">Quote</label>
                    <input type="text" class="form-control @error('quote') is-invalid @enderror" id="quote" name="quote" value="{{ old('quote', $user->quote) }}" aria-describedby="quote" required>
                    {{-- <div id="quote" class="form-text">Contoh: Illustrator, Programmer, Trainer</div> --}}
                    @error('quote')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-5">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" aria-describedby="description" rows="5" required>{{ old('description', $user->description) }}</textarea>
                    {{-- <div id="description" class="form-text">Contoh: 081312121313</div> --}}
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                    <label for="portfolio_link" class="form-label">Portfolio Link</label>
                    <input type="text" class="form-control @error('portfolio_link') is-invalid @enderror" id="portfolio_link" name="portfolio_link" value="{{ old('portfolio_link', $user->portfolio_link) }}" aria-describedby="portfolio_link">
                    <div id="portfolio_link" class="form-text">Contoh: https://***.com/</div>
                    @error('portfolio_link')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-5 mb-lg-0">
                    <label for="dribbble_link" class="form-label">Dribbble Link</label>
                    <input type="text" class="form-control @error('dribbble_link') is-invalid @enderror" id="dribbble_link" name="dribbble_link" value="{{ old('dribbble_link', $user->dribbble_link) }}" aria-describedby="dribbble_link">
                    <div id="dribbble_link" class="form-text">Contoh: https://dribbble.com/***</div>
                    @error('dribbble_link')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                    <label for="github_link" class="form-label">Github Link</label>
                    <input type="text" class="form-control @error('github_link') is-invalid @enderror" id="github_link" name="github_link" value="{{ old('github_link', $user->github_link) }}" aria-describedby="github_link">
                    <div id="github_link" class="form-text">Contoh: https://github.com/***</div>
                    @error('github_link')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-5 mb-lg-0">
                    <label for="facebook_link" class="form-label">Facebook Link</label>
                    <input type="text" class="form-control @error('facebook_link') is-invalid @enderror" id="facebook_link" name="facebook_link" value="{{ old('facebook_link', $user->facebook_link) }}" aria-describedby="facebook_link">
                    <div id="facebook_link" class="form-text">Contoh: https://www.facebook.com/***/</div>
                    @error('facebook_link')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-5 justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <button type="submit" class="button-submit">Simpan</button>
                </div>
            </div>
        </form>

        {{-- FORM BAHASA --}}
        <div class="row mb-3 justify-content-center border-top">
            <div class="col-md-12 col-lg-10 pt-3">
                <h1>Penggunaan Bahasa</h1>
                <p>Bahasa yang kamu kuasai yang mungkin dapat menarik pembeli.</p>
            </div>
        </div>

        <div class="row mb-1 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h5>Tambah Bahasa</h5>
            </div>
        </div>

        <form action="/language" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <label for="language" class="form-label">Bahasa</label>
                    <input type="text" class="form-control @error('language') is-invalid @enderror" id="language" name="language" value="{{ old('language') }}" aria-describedby="language" required>
                    <div id="language" class="form-text">Contoh: Indonesia, Korea, Japan</div>
                    @error('language')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-select" name="level_id">
                        @foreach ($level_languages as $level)
                            @if (old('level_id') == $level->id)
                                <option value="{{ $level->id }}" selected>{{ $level->name }}</option>
                            @else
                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div id="job" class="form-text">Contoh: Basic, Conversational, Fluent, Native</div>
                </div>
                <div class="col-md-12 col-lg-2">
                    <button type="submit" class="button-submit">Simpan</button>
                </div>
            </div>
        </form>

        <div class="row mb-1 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h5>Edit Bahasa</h5>
            </div>
        </div>

        @foreach ($languages as $language)
        <form action="/language/{{ $language->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    {{-- <label for="language" class="form-label">Bahasa</label> --}}
                    <input type="text" class="form-control @error('language') is-invalid @enderror" id="language" name="language" value="{{ old('language', $language->name) }}" aria-describedby="language" required>
                    {{-- <div id="language" class="form-text">Contoh: Indonesia, Korea, Japan</div> --}}
                    @error('language')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    {{-- <label for="level" class="form-label">Level</label> --}}
                    <select class="form-select" name="level_id">
                        @foreach ($level_languages as $level)
                            @if (old('level_id', $language->level_id) == $level->id)
                                <option value="{{ $level->id }}" selected>{{ $level->name }}</option>
                            @else
                                <option value="{{ $level->id }}" >{{ $level->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    {{-- <div id="job" class="form-text">Contoh: Basic, Conversational, Fluent, Native</div> --}}
                </div>
                <div class="col-md-12 col-lg-2">
                    <button type="submit" class="button-submit">Update</button>
                </div>
            </div>
        </form>
        <form action="/language/{{ $language->id }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            @method('delete')
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-2">
                        <button type="submit" class="button-delete" onclick="return confirm('Are you sure?')">Delete</button>
                </div>
            </div>
        </form>
        @endforeach

        {{-- FORM EDUKASI --}}
        <div class="row mb-3 justify-content-center border-top">
            <div class="col-md-12 col-lg-10 pt-3">
                <h1>Edukasi</h1>
                <p>Masukkan tingkat edukasi kamu untuk menunjukkan pengetahuan anda.</p>
            </div>
        </div>

        <div class="row mb-1 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h5>Tambah Edukasi</h5>
            </div>
        </div>

        <form action="/education" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-5 col-lg-2 mb-3 mb-lg-0">
                    <label for="region" class="form-label">Negara Universitas</label>
                    <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" name="region" value="{{ old('region') }}" aria-describedby="region" required>
                    <div id="region" class="form-text">Contoh: Indonesia, Korea</div>
                    @error('region')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-5 col-lg-6 mb-3 mb-lg-0">
                    <label for="name" class="form-label">Nama Universitas</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" aria-describedby="name" required>
                    <div id="name" class="form-text">Contoh: Bina Nusantara University</div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-2 col-lg-2 mb-0 mb-md-3 mb-lg-0">
                    <label for="year" class="form-label">Tahun Lulus</label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year') }}" aria-describedby="year" required>
                    <div id="year" class="form-text">Contoh: 2014</div>
                    @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                    <label for="title" class="form-label">Title Gelar</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" aria-describedby="title" required>
                    <div id="title" class="form-text">Contoh: S.Si, S.Ti, S.M.</div>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                    <label for="major" class="form-label">Jurusan</label>
                    <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" name="major" value="{{ old('major') }}" aria-describedby="major" required>
                    <div id="major" class="form-text">Contoh: Computer Science, Finance, Psikologi</div>
                    @error('major')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-12 col-lg-2">
                    <button type="submit" class="button-submit">Simpan</button>
                </div>
            </div>
        </form>

        <div class="row mb-1 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h5>Edit Edukasi</h5>
            </div>
        </div>

        @foreach ($educations as $education)
        <form action="/education/{{ $education->id }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            @method('PUT')

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-5 col-lg-2 mb-3 mb-lg-0">
                    {{-- <label for="region" class="form-label">Negara Universitas</label> --}}
                    <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" name="region" value="{{ old('region', $education->region) }}" aria-describedby="region" required>
                    {{-- <div id="region" class="form-text">Contoh: Indonesia, Korea, Japan</div> --}}
                    @error('region')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-5 col-lg-6 mb-3 mb-lg-0">
                    {{-- <label for="name" class="form-label">Nama Universitas</label> --}}
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $education->name) }}" aria-describedby="name" required>
                    {{-- <div id="name" class="form-text">Contoh: Bina Nusantara University</div> --}}
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-2 col-lg-2 mb-0 mb-md-3 mb-lg-0">
                    {{-- <label for="year" class="form-label">Tahun Lulus</label> --}}
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year', $education->year) }}" aria-describedby="year" required>
                    {{-- <div id="year" class="form-text">Contoh: 2014</div> --}}
                    @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                    {{-- <label for="title" class="form-label">Title Gelar</label> --}}
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $education->title) }}" aria-describedby="title" required>
                    {{-- <div id="title" class="form-text">Contoh: S.Si, S.Ti, S.M.</div> --}}
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                    {{-- <label for="major" class="form-label">Jurusan</label> --}}
                    <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" name="major" value="{{ old('major', $education->major) }}" aria-describedby="major" required>
                    {{-- <div id="major" class="form-text">Contoh: Computer Science, Finance, Psikologi</div> --}}
                    @error('major')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-12 col-lg-2">
                    <button type="submit" class="button-submit">Update</button>
                </div>
            </div>
        </form>
        <form action="/education/{{ $education->id }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            @method('delete')
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-2">
                        <button type="submit" class="button-delete" onclick="return confirm('Are you sure?')">Delete</button>
                </div>
            </div>
        </form>
        @endforeach

        {{-- FORM CERTIFICATION --}}
        <div class="row mb-3 justify-content-center border-top">
            <div class="col-md-12 col-lg-10 pt-3">
                <h1>Sertifikat</h1>
                <p>Masukkan sertifikat kamu untuk menunjukkan skillmu.</p>
            </div>
        </div>

        <div class="row mb-1 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h5>Tambah Sertifikat</h5>
            </div>
        </div>

        <form action="/certification" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-5 col-lg-4 mb-3 mb-lg-0">
                    <label for="title" class="form-label">Judul Sertifikat</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" aria-describedby="title" required>
                    <div id="title" class="form-text">Contoh: Cisco Certified Network</div>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-5 col-lg-4 mb-3 mb-lg-0">
                    <label for="name" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" aria-describedby="name" required>
                    <div id="name" class="form-text">Contoh: Cisco, Fiverr</div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-2 col-lg-2 mb-0 mb-md-3 mb-lg-0">
                    <label for="year" class="form-label">Tahun</label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year') }}" aria-describedby="year" required>
                    <div id="year" class="form-text">Contoh: 2014</div>
                    @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">

                </div>
                <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">

                </div>
                <div class="col-md-12 col-lg-2">
                    <button type="submit" class="button-submit">Simpan</button>
                </div>
            </div>
        </form>

        <div class="row mb-1 justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h5>Edit Sertifikat</h5>
            </div>
        </div>

        @foreach ($certifications as $certification)
        <form action="/certification/{{ $certification->id }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            @method('PUT')

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-5 col-lg-4 mb-3 mb-lg-0">
                    {{-- <label for="title" class="form-label">Negara Universitas</label> --}}
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $certification->title) }}" aria-describedby="title" required>
                    {{-- <div id="title" class="form-text">Contoh: Indonesia, Korea, Japan</div> --}}
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-5 col-lg-4 mb-3 mb-lg-0">
                    {{-- <label for="name" class="form-label">Nama Universitas</label> --}}
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $certification->name) }}" aria-describedby="name" required>
                    {{-- <div id="name" class="form-text">Contoh: Bina Nusantara University</div> --}}
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="col-md-2 col-lg-2 mb-0 mb-md-3 mb-lg-0">
                    {{-- <label for="year" class="form-label">Tahun Lulus</label> --}}
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year', $certification->year) }}" aria-describedby="year" required>
                    {{-- <div id="year" class="form-text">Contoh: 2014</div> --}}
                    @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">

                </div>
                <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">

                </div>
                <div class="col-md-12 col-lg-2">
                    <button type="submit" class="button-submit">Update</button>
                </div>
            </div>
        </form>
        <form action="/certification/{{ $certification->id }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            @method('delete')
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-2">
                        <button type="submit" class="button-delete" onclick="return confirm('Are you sure?')">Delete</button>
                </div>
            </div>
        </form>
        @endforeach



    </div>

    <script>
        function previewImage()
        {
           const image = document.querySelector('#photo_profile');
           const imgPreview = document.querySelector('.img-preview');

           imgPreview.style.display = 'block';
           imgPreview.style.width = '300px';
           imgPreview.style.height = '300px';
           imgPreview.style.borderRadius = '50%';

           const oFReader = new FileReader();
           oFReader.readAsDataURL(image.files[0]);

           oFReader.onload = function(oFREvent) {
               imgPreview.src = oFREvent.target.result;
           }
        }
    </script>
@endsection
