@extends('layouts.main')

@section('container')
    <!-- LANDING PAGE -->
    <div class="container mb-5 mb-lg-2">
        <div class="row justify-content-center align-items-center">
        <div class="col-md text-center mb-4">
            <img
            src="/img/1.svg"
            alt=""
            class="home_img img-fluid"
            style="width: 500px"
            />
        </div>
        <div class="col-md text-center text-md-start">
            <h1 class="landing_title mb-2">
            Cari <span>Freelancer</span> dan <span>Pekerjaan</span> jadi
            lebih mudah.
            </h1>
            <p class="landing_subtitle">
            Kami menyediakan layanan dalam mencari pekerjaan ataupun
            freelancer yang berfokus pada Mahasiswa.
            </p>
        </div>
        </div>
    </div>

    <!-- CATEGORY CAROUSEL -->
    <div class="container mb-5 category-row pt-3">
        <div class="btn-carousel-prev text-center m-0 p-0">
            <i class="uil uil-angle-left-b arrow-icon"></i>
        </div>
        <div class="btn-carousel-next">
            <i class="uil uil-angle-right-b arrow-icon"></i>
        </div>
        <div
        class="
            row
            text-center
            justify-content-center
            align-items-center
            category-carousel
            owl-carousel owl-theme
        "
        >
            @foreach ($categories as $category)
            <div class="col-md px-0 mx-4">
                <a href="/categories/{{ $category->slug }}">
                <img
                    src="/img/icon/category/{{ $category->slug }}.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>{{ $category->name }}</p>
                </a>
            </div>
            @endforeach

            {{-- <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/web-programming.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Programming</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/digital-marketing.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Digital Marketing</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/writing.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Penulisan & Penerjemahan</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/video.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Video & Animasi</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/music.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Musik & Audio</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/business.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Bisnis</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/lifestyle.svg"
                    alt=""
                    class="category_img img-fluid mb-3"
                />
                <p>Gaya Hidup</p>
                </a>
            </div>
            <div class="col-md px-0 mx-4">
                <a href="#">
                <img
                    src="/img/icon/category/industry.svg"
                    alt=""
                    class="category_img img-fluid mb-3 text-center"
                />
                <p>Trending</p>
                </a>
            </div> --}}
        </div>
    </div>

    <!-- SELESAIKAN PROJECT -->
    <div class="container mb-5">
        <div
        class="row text-center justify-content-center align-items-center"
        >
            <div class="col-md mb-3">
                <h3 class="mb-4">
                Selesaikan Project dengan mudah bersama Project-In
                </h3>
                <div class="search-job-home py-4 px-5 text-center">
                <p class="mb-4">
                    <span style="color: #f05454">Hi</span> <span>@auth{{ auth()->user()->first_name }},@else Kawan, @endauth</span>
                    ingin dapatkan <span>job handal</span> untuk
                    pekerjaanmu?<br />Klik tombol di bawah untuk mencari
                    freelancer yang anda butuhkan!
                </p>

                <a href="/freelancers"
                    ><button class="button-standard">Cari Freelancer</button></a
                >
                </div>
            </div>
            <div class="col-md mb-3">
                <img
                src="/img/icon/home_client/clients.svg"
                alt=""
                class="img-fluid"
                />
            </div>
        </div>
    </div>

    <!-- KATEGORI PROJECT POPULER MINGGU INI -->
    <div class="container mb-5">
        <div class="section_title text-center mb-1">
        <h3>KATEGORI PROJECT POPULER MINGGU INI</h3>
        </div>
        <div class="section_subtitle text-center mb-4 mb-md-5">
        <p>Temukan kategori project terpopuler di minggu ini</p>
        </div>
        <div class="row">
        <div class="col-md">
            <a href="#">
                <div
                    class="card project-populer-card bg-transparent mb-3"
                    style="
                    background-image: url('/img/project/desain-logo.svg');
                    "
                >
                    <div class="card-body project-populer-title py-1 px-0">
                    <h6 class="card-title">Desain Logo</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md">
            <a href="#">
                <div
                    class="card project-populer-card bg-transparent mb-3"
                    style="
                    background-image: url('/img/project/photographer.svg');
                    "
                >
                    <div class="card-body project-populer-title py-1 px-0">
                    <h6 class="card-title">Photographer</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md">
            <a href="#">
                <div
                    class="card project-populer-card bg-transparent mb-3"
                    style="
                    background-image: url('/img/project/video-editor.svg');
                    "
                >
                    <div class="card-body project-populer-title py-1 px-0">
                    <h6 class="card-title">Video Editor</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md">
            <a href="#">
                <div
                    class="card project-populer-card bg-transparent mb-3"
                    style="background-image: url('/img/project/web-dev.svg')"
                >
                    <div class="card-body project-populer-title py-1 px-0">
                    <h6 class="card-title">Web Developer</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md">
            <a href="#">
                <div
                    class="card project-populer-card bg-transparent mb-3"
                    style="
                    background-image: url('/img/project/socmed-marketing.svg');
                    "
                >
                    <div class="card-body project-populer-title py-1 px-0">
                    <h6 class="card-title">Social Media Marketing</h6>
                    </div>
                </div>
            </a>
        </div>
        </div>
    </div>

    <!-- ALASAN PROJECT-IN -->
    <div class="container-fluid container-alasan pt-4">
        <div class="container mb-5">
        <div class="section_title text-center mb-1">
            <h3>ALASAN PROJECT-IN</h3>
        </div>
        <div class="section_subtitle text-center mb-3 mb-md-5">
            <p>Alasan mengapa anda dapat memilih Project-In</p>
        </div>
        <div
            class="row text-center justify-content-center align-items-center"
        >
            <div class="col-md">
                <div class="alasan-card py-4 mb-3">
                    <img
                    src="/img/icon/alasan/workboard.svg"
                    class="card-img-top alasan-img img-fluid mb-3"
                    alt="..."
                    />
                    <div class="card-body">
                    <h5 class="card-title">Banyak Pilihan Pekerjaan</h5>
                    <p class="card-text px-2">
                        Project-In menyediakan banyak kategori pekerjaan yang dapat
                        dipilih
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="alasan-card py-4 mb-3">
                    <img
                    src="/img/icon/alasan/freelancer.svg"
                    class="card-img-top alasan-img img-fluid mb-3"
                    alt="..."
                    />
                    <div class="card-body">
                    <h5 class="card-title">Freelancer yang Berkualitas</h5>
                    <p class="card-text px-2">
                        Project-In memiliki partner Freelancer yang memiliki
                        kemampuan di bidangnya
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="alasan-card py-4 mb-3">
                    <img
                    src="img/icon/alasan/secure.svg"
                    class="card-img-top alasan-img img-fluid mb-3"
                    alt="..."
                    />
                    <div class="card-body">
                    <h5 class="card-title">Keamanan Sistem Transaksi</h5>
                    <p class="card-text px-2">
                        Project-In menjamin keamanan pada setiap transaksi yang
                        dilakukan
                    </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- CARA KERJA PROJECT-IN -->
    <div class="container mb-5">
        <div class="section_title text-center mb-1">
        <h3>CARA KERJA PROJECT-IN</h3>
        </div>
        <div class="section_subtitle text-center mb-4 mb-md-5">
        <p>Bagaimana cara kerja dari Project-In?</p>
        </div>
        <div
        class="row text-center justify-content-center align-items-center"
        >
        <div class="col-md mb-3">
            <div class="cara-kerja-step mb-3">
            <div class="cara-kerja-number me-3"><p>1</p></div>
            <p class="cara-kerja-description">
                Daftar menjadi Client atau Freelancer
            </p>
            </div>
            <div class="cara-kerja-step mb-3">
            <p class="cara-kerja-description">
                Buat atau cari project yang diinginkan
            </p>
            <div class="cara-kerja-number ms-3"><p>2</p></div>
            </div>
            <div class="cara-kerja-step mb-3">
            <div class="cara-kerja-number me-3"><p>3</p></div>
            <p class="cara-kerja-description">
                Kerjakan project yang telah dipilih
            </p>
            </div>
            <div class="cara-kerja-step mb-3">
            <p class="cara-kerja-description">
                Dapatkan hasil atau uang diakhir project
                <div class="cara-kerja-number ms-3"><p>4</p></div>
            </p>
            </div>
        </div>
        <div class="col-md mb-3">
            <img
            src="/img/cara-kerja/1.jpg"
            alt=""
            class="img-fluid cara-kerja-img"
            />
        </div>
        </div>
    </div>

@endsection

