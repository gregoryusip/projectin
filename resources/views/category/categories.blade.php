@extends('layouts.main')

@section('container')
    <div class="container mb-5">
        <div class="row">

            <div class="col-md-12 ps-2">
                <div class="section_title mb-1">
                    <h3>KATEGORI PEKERJAAN</h3>
                </div>
                <div class="section_subtitle mb-3 mb-md-4">
                    <p>
                        Pilih
                        <span style="font-weight: 700">Kategori Favorit</span> untuk
                        pekerjaanmu!
                    </p>
                </div>

                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/categories/{{ $category->slug }}">
                            <div
                                class="card job-category-card bg-transparent mb-3"
                                style="
                                background-image: url('/img/category/{{ $category->slug }}.jpg');
                                "
                            >
                                <div class="card-body job-category-title py-1 px-0">
                                <h6 class="card-title">{{ $category->name }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
