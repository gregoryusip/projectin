@extends('layouts.main')

@section('container')
    <div class="container mb-5">
        <div class="row" style="margin-top: 170px">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 170px">
                <a
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#job-categories"
                    aria-expanded="false"
                >
                    <div class="row align-items-center mb-2">
                    <div class="col-10">
                        <h5>Grafis & Desain</h5>
                    </div>
                    <div class="col-2">
                        <button
                        class="sidebar-arrow-button align-items-center"
                        data-bs-toggle="collapse"
                        data-bs-target="#job-categories"
                        aria-expanded="false"
                        >
                        <i class="uil uil-angle-right-b p-0 arrow-icon"></i>
                        </button>
                    </div>
                    </div>
                </a>
                <div class="collapse" id="job-categories">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="mb-2"><a href="#" class="">Desain Logo</a></li>
                    <li class="mb-2"><a href="#" class="">Ilustrasi</a></li>
                    <li class="mb-2">
                        <a href="#" class="">UI / UX Aplikasi Website & Mobile</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Media Sosial</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Edit Gambar & Photoshop</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Model Karakter</a>
                    </li>
                    <li class="mb-2"><a href="#" class="">Infografis</a></li>
                    <li class="mb-2"><a href="#" class="">Presentasi</a></li>
                    <li class="mb-2"><a href="#" class="">Desain Brosur</a></li>
                    <li class="mb-2"><a href="#" class="">Desain Poster</a></li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Pamflet</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Banner & Baliho</a>
                    </li>
                    <li class="mb-2"><a href="#" class="">Desain Buku</a></li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Pattern</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Kartu Pos</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Catalog</a>
                    </li>
                    <li class="mb-2"><a href="#" class="">Desain Resume</a></li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Pengemasan</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="">Desain Album Cover</a>
                    </li>
                    <li class="mb-2"><a href="#" class="">Desain Menu</a></li>
                    <li class="mb-2"><a href="#" class="">Lain - Lain</a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-9 ps-2">
                <div class="section_title mb-1">
                <h3>Grafis & Desain</h3>
                </div>
                <div class="section_subtitle mb-3 mb-md-4">
                <p>
                    Dapatkan
                    <span style="font-weight: 700">freelancer kreatif</span> untuk
                    pekerjaanmu!
                </p>
                </div>

                <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/1.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Desain Logo</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/2.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Ilustrasi</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/3.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">UI/UX Website & Mobile</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/1.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Desain Logo</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/2.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Ilustrasi</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/3.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">UI/UX Website & Mobile</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/1.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Desain Logo</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/2.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Ilustrasi</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/3.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">UI/UX Website & Mobile</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/1.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Desain Logo</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/2.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Ilustrasi</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/3.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">UI/UX Website & Mobile</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/1.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Desain Logo</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/2.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Ilustrasi</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/3.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">UI/UX Website & Mobile</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/1.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Desain Logo</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/2.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">Ilustrasi</h6>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div
                        class="card job-category-card bg-transparent mb-3"
                        style="
                        background-image: url('/img/category/grafis_desain/3.svg');
                        "
                    >
                        <div class="card-body job-category-title py-1 px-0">
                        <h6 class="card-title">UI/UX Website & Mobile</h6>
                        </div>
                    </div>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
