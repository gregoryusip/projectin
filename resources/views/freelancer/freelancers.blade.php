@extends('layouts.main')

@section('container')
<!-- FREELANCER POPULER MINGGU INI -->
        <div class="container job-container mb-5">
          <div class="section_title text-center mb-1">
            <h3>FREELANCER POPULER MINGGU INI</h3>
          </div>
          <div class="section_subtitle text-center mb-4 mb-md-5">
            <p>Temukan Freelancer terpopuler di minggu ini</p>
          </div>
          <div class="row">
                @foreach ($users as $user)
                <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                  <div class="card freelancer-card px-2">
                      <div class="card-body">
                          <div class="row text-center mb-1">
                              <p><i class="uil uil-map-marker"></i> {{ $user->region }}</p>
                          </div>

                          <div
                          class="
                              row
                              text-center
                              justify-content-center
                              mb-3
                          "
                          >
                            @if ($user->photo_profile)
                            <div class="col-12 job-photo-container">
                                <img
                                src="{{ asset('storage/' . $user->photo_profile) }}"
                                alt=""
                                class="freelancer-img"
                                />
                            </div>
                            @else
                            <div class="col-12 job-photo-container">
                                <img
                                src="/img/freelancer/baesuzy.png"
                                alt=""
                                class="freelancer-img"
                                />
                            </div>
                            @endif
                          </div>

                          <div class="row text-center mb-1">
                              <div class="d-flex justify-content-center align-items-center">
                                  <h6 class="card-title freelancer-name mb-0 me-1">
                                      <a href="/{{ $user->username }}">{{ $user->full_name }}</a>
                                  </h6>
                                  @if ($user->is_verified == true)
                                  <img src="/img/icon/verified/verified.svg" alt="" class="verified-icon">
                                  @endif
                              </div>
                              <p class="freelancer-job">{{ $user->role }}</p>
                          </div>

                          <div class="row text-center mb-3">
                              <p class="card-text">
                                  {{ $user->quote }}
                              </p>
                          </div>

                          <div class="row text-center mb-3">
                              <a href="/{{ $user->username }}">
                                  <button class="button-standard">Lihat Profile</button>
                              </a>
                          </div>
                      </div>
                  </div>
                </div>
                @endforeach
              {{-- @foreach ($jobs as $job)
              <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                <div class="card job-card">
                    <a href="/jobs/{{ $job->slug }}">
                        <img
                        src="/img/portfolio/1.svg"
                        class="card-img-top job-portfolio img-fluid"
                        alt="..."
                        />
                    </a>
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
                        <div class="col-3 job-photo-container">
                            <img
                            src="/img/freelancer/baesuzy.png"
                            alt=""
                            class="job-img"
                            />
                        </div>
                        <div class="col-7">
                            <h6 class="card-title job-name mb-0">
                                <a href="/profile">{{ $job->user->name }}</a>
                            </h6>
                            <p class="job-job mb-0">Logo Desainer</p>
                        </div>
                        <div class="col-2">
                            <button class="job-love">
                            <i class="uil uil-heart-alt"></i>
                            </button>
                        </div>
                        </div>

                        <p class="card-text">
                        {{ $job->title }}
                        </p>

                        <div class="row">
                        <div class="col-5 d-flex align-items-center">
                            <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                            />
                            <p class="job-rating mb-0 me-1">4.9</p>
                            <p class="job-rating-count mb-0">(2354)</p>
                        </div>
                        <div class="col-7 text-end">
                            <p class="job-price mb-0">
                            Mulai: <span>Rp {{ $job->price }}</span>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach --}}
          </div>
        </div>
@endsection
