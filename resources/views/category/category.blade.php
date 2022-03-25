@extends('layouts.main')

@section('container')
    <div class="container mb-5">

        <!-- BREADCRUMB -->
        <div class="container mb-5 p-0">
          <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Kategori</a></li>
              {{-- <li class="breadcrumb-item"><a href="#">Grafis & Desain</a></li> --}}
              <li class="breadcrumb-item active" aria-current="page">
                {{ $category->name }}
              </li>
            </ul>
          </nav>
        </div>

        <div class="row">
            <div class="col-md-12 ps-2">
                <div class="section_title mb-1">
                    <h3>{{ $category->name }}</h3>
                </div>
                <div class="section_subtitle mb-3 mb-md-4">
                    <p>
                        Pilih
                        <span style="font-weight: 700">Kategori Favorit</span> untuk
                        pekerjaanmu!
                    </p>
                </div>

                <div class="row">
                    <div class="row">
                        @foreach ($jobs as $job)
                        <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                            <div class="card job-card">
                                @if ($job->job_image->count())
                                <a href="/jobs/{{ $job->slug }}">
                                    <img
                                    src="{{ asset('storage/' . $job->job_image[0]->image) }}"
                                    class="card-img-top job-portfolio img-fluid"
                                    alt="..."
                                    />
                                </a>
                                @else
                                <a href="/jobs/{{ $job->slug }}">
                                    <img
                                    src="/img/portfolio/1.svg"
                                    class="card-img-top job-portfolio img-fluid"
                                    alt="..."
                                    />
                                </a>
                                @endif
                                <div class="card-body">
                                    <div
                                    class="
                                        row
                                        job-card-name
                                        justify-content-center
                                        align-items-center
                                        mb-3
                                    "
                                    >
                                    @if ($job->user->photo_profile)
                                    <div class="col-3 job-photo-container">
                                        <img
                                        src="{{ asset('storage/' . $job->user->photo_profile) }}"
                                        alt=""
                                        class="job-img"
                                        />
                                    </div>
                                    @else
                                    <div class="col-3 job-photo-container">
                                        <img
                                        src="/img/freelancer/baesuzy.png"
                                        alt=""
                                        class="job-img"
                                        />
                                    </div>
                                    @endif
                                    <div class="col-7">
                                        <h6 class="card-title job-name mb-0">
                                            <a href="/{{ $job->user->username }}">{{ $job->user->full_name }}</a>
                                        </h6>
                                        <p class="job-job mb-0">{{ $job->user->role }}</p>
                                    </div>
                                    <div class="col-2">
                                        @if ($job->user->is_verified == true)
                                            <img src="/img/icon/verified/verified.svg" alt="" class="verified-icon" style="width: 20px">
                                        @endif
                                        {{-- <button class="job-love">
                                            <i class="uil uil-heart-alt"></i>
                                        </button> --}}
                                    </div>
                                    </div>

                                    <p class="card-text">
                                        <a href="/jobs/{{ $job->slug }}">
                                            {{ $job->title }}
                                        </a>
                                    </p>

                                    <div class="row">
                                    <div class="col-12">
                                        <p class="job-price mb-0">
                                        Mulai: <span>@currency( $job->price )</span>
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
