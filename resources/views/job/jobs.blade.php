@extends('layouts.main')

@section('container')
    <!-- PROMO CAROUSEL -->
        <div class="container pt-5 mt-5 mb-5 p-md-0">
          <div
            id="carouselExampleIndicators"
            class="carousel slide promos-carousel"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="/img/carousel/1.jpg"
                  class="d-block w-100 img-fluid promo-carousel-img"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/img/carousel/1.jpg"
                  class="d-block w-100 img-fluid promo-carousel-img"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/img/carousel/1.jpg"
                  class="d-block w-100 img-fluid promo-carousel-img"
                  alt="..."
                />
              </div>
            </div>
          </div>
        </div>

        <!-- PROJECT POPULER MINGGU INI -->
        {{-- <div class="container mb-5">
          <div class="section_title text-center mb-1">
            <h3>PROJECT POPULER MINGGU INI</h3>
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
        </div> --}}

        <!-- JOB TERBARU MINGGU INI -->
        <div class="container job-container mb-5">
          <div class="section_title text-center mb-1">
            <h3>JOB TERBARU MINGGU INI</h3>
          </div>
          <div class="section_subtitle text-center mb-4 mb-md-5">
            <p>Temukan Job terbaru di minggu ini</p>
          </div>
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
                        {{-- <div class="col-5 d-flex align-items-center">
                            <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                            />
                            <p class="job-rating mb-0 me-1">4.9</p>
                            <p class="job-rating-count mb-0">(2354)</p>
                        </div> --}}
                        <div class="col-12">
                            <p class="job-price mb-0">
                            Mulai: <span>@currency($job->price)</span>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach

            {{-- <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div> --}}
          </div>
        </div>

        <!-- ALL JOBS-->
        <div class="container job-container mb-5">
          <div class="section_title text-center mb-1">
            <h3>REKOMENDASI JOB</h3>
          </div>
          <div class="section_subtitle text-center mb-3">
            <p>
              Rekomendasi Job yang cocok untuk memenuhi kebutuhan anda!
            </p>
          </div>
          <div class="row justify-content-center text-center mb-3">
              <div class="col-12">
                  <a href="/jobs/all-jobs">
                    <button type="button" class="button-contact">
                        Cek Semua Pekerjaan
                    </button>
                </a>
              </div>
          </div>
          <div class="row">
              @foreach ($all_jobs as $job)
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
                        {{-- <div class="col-5 d-flex align-items-center">
                            <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                            />
                            <p class="job-rating mb-0 me-1">4.9</p>
                            <p class="job-rating-count mb-0">(2354)</p>
                        </div> --}}
                        <div class="col-12">
                            <p class="job-price mb-0">
                            Mulai: <span>@currency($job->price)</span>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach

            {{-- <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
              <div class="card job-card">
                <a href="#">
                  <img
                    src="/img/portfolio/1.svg"
                    class="card-img-top job-portfolio img-fluid"
                    alt="..."
                  />
                </a>

                <a href="#">
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
                          src="/img/job/baesuzy.png"
                          alt=""
                          class="job-img"
                        />
                      </div>
                      <div class="col-7">
                        <h6 class="card-title job-name mb-0">
                          Bae Suzy
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
                      Saya akan mendesain logo terbaik untuk brand atau
                      perusahaan.
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
                          Mulai: <span>Rp 100.000</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div> --}}
          </div>
        </div>
@endsection
