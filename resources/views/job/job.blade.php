@extends('layouts.main')

@section('container')
<!-- BREADCRUMB -->
        <div class="container mb-4">
          <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Kategori</a></li>
              <li class="breadcrumb-item"><a href="#">Grafis & Desain</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Desain Logo
              </li>
            </ul>
          </nav>
        </div>

        <!-- JOB DETAIL -->
        <div class="container mb-5">
          <div class="row">
            <!-- KIRI -->
            <div class="col-lg-8 mb-4">
              <div class="job-details">
                <h2 class="mb-4 mb-md-2 text-center text-md-start">
                  {{ $job->title }}
                </h2>
                <div
                  class="row text-center text-md-start job-details-owner justify-content-center justify-content-md-start align-items-center mb-4"
                >
                  <div class="col-3 col-md-1 col-lg-1 col-xl-1 mb-3 mb-md-0">
                      @if ($job->user->photo_profile)
                      <img
                        src="{{ asset('storage/' . $job->user->photo_profile) }}"
                        alt=""
                        class="job-details-owner-img"
                      />
                      @else
                      <img
                        src="/img/freelancer/baesuzy.png"
                        alt=""
                        class="job-details-owner-img"
                      />
                      @endif
                  </div>

                  <div
                    class="col-9 col-md-6 mb-3 mb-md-0 job-details-owner-name"
                  >
                    <div class="d-flex align-items-center">
                        <h6 class="my-0 ms-lg-3 ms-xl-0"><a href="/{{ $job->user->username }}">{{ $job->user->full_name }}</a></h6>
                        @if ($job->user->is_verified == true)
                        <img src="/img/icon/verified/verified.svg" alt="" class="verified-icon ms-2">
                        @endif
                    </div>
                    <p class="my-0 ms-lg-3 ms-xl-0">{{ $job->user->university }}</p>
                  </div>

                  <div class="col-12 col-md-5 mb-3 mb-md-0">
                    <div
                      class="d-flex justify-content-center justify-content-md-start align-items-center"
                    >
                      <img
                        src="/img/icon/card/star.svg"
                        alt=""
                        class="mb-0 me-1"
                      />
                      <img
                        src="/img/icon/card/star.svg"
                        alt=""
                        class="mb-0 me-1"
                      />
                      <img
                        src="/img/icon/card/star.svg"
                        alt=""
                        class="mb-0 me-1"
                      />
                      <img
                        src="/img/icon/card/star.svg"
                        alt=""
                        class="mb-0 me-1"
                      />
                      <img
                        src="/img/icon/card/star.svg"
                        alt=""
                        class="mb-0 me-1"
                      />
                      <p class="freelancer-rating mb-0 me-1">4.9</p>
                      <p class="freelancer-rating-count mb-0">(2354 Reviews)</p>
                    </div>
                  </div>
                </div>

                <!-- <div class="job-details-img text-center mb-5 bg-danger">
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
                      job-img-carousel
                      owl-carousel owl-theme
                    "
                  >
                    <div class="col-md item">
                      <img
                        src="/img/portfolio/1.svg"
                        alt=""
                        class="img-fluid mb-3"
                      />
                    </div>
                    <div class="col-md px-0 mx-4">
                      <img
                        src="/img/category/grafis_desain/2.svg"
                        alt=""
                        class="img-fluid mb-3"
                      />
                    </div>
                    <div class="col-md px-0 mx-4">
                      <img
                        src="/img/project/photographer.svg"
                        alt=""
                        class="img-fluid mb-3"
                      />
                    </div>
                  </div>
                </div> -->

                <div class="job-details-img mb-5">
                  <!-- <img
                    src="/img/portfolio/1.svg"
                    alt=""
                    class="img-fluid"
                  /> -->
                  <div class="main-carousel" data-flickity>
                      @if ($job->job_image->count())
                        @foreach ($job->job_image as $images)
                        <div class="carousel-cell">
                            <img
                                class="carousel-cell-image"
                                src="{{ asset('storage/' . $images->image) }}"
                            />
                        </div>
                        @endforeach
                      @else
                      <div class="carousel-cell">
                        <img
                          class="carousel-cell-image"
                          src="/img/portfolio/1.svg"
                        />
                      </div>
                      <div class="carousel-cell">
                        <img
                          class="carousel-cell-image"
                          src="/img/category/grafis_desain/3.svg"
                        />
                      </div>
                      <div class="carousel-cell">
                        <img
                          class="carousel-cell-image"
                          src="/img/project/web-dev.svg"
                        />
                      </div>
                      <div class="carousel-cell">
                        <img
                          class="carousel-cell-image"
                          src="/img/portfolio/1.svg"
                        />
                      </div>
                      <div class="carousel-cell">
                        <img
                          class="carousel-cell-image"
                          src="/img/category/grafis_desain/3.svg"
                        />
                      </div>
                      <div class="carousel-cell">
                        <img
                          class="carousel-cell-image"
                          src="/img/project/web-dev.svg"
                        />
                      </div>
                      @endif
                  </div>
                </div>

                <div class="job-details-about-job mb-4 border-bottom">
                  <h4 class="subsection_title mb-4">About this Job</h4>
                  {{-- <p>{{ $job->description }}</p> --}}
                  <p>{!! $job->description !!}</p>
                </div>

                <div class="job-details-style mb-4 border-bottom">
                  <div class="row text-center text-md-start">
                    <div class="col-md-4 mb-3">
                      <h6 class="subsection_subtitle mb-3">Style</h6>
                      <p>{{ $job->job_style }}</p>
                    </div>
                    <div class="col-md-8">
                      <h6 class="subsection_subtitle mb-3">File Format</h6>
                      <p>{{ $job->file_format }}</p>
                    </div>
                  </div>
                </div>

                <div class="job-details-about-owner text-center text-md-start">
                  <h4 class="subsection_title mb-4">About this Seller</h4>
                  <div class="py-5 px-4 job-details-about-owner-box">
                    <div
                      class="row mb-4 pb-4 text-center text-md-start job-details-about-owner-data justify-content-center justify-content-md-start align-items-center border-bottom"
                    >
                      <div
                        class="col-6 mb-3 mb-md-0 job-details-about-owner-data-img"
                      >
                        @if ($job->user->photo_profile)
                        <img
                          src="{{ asset('storage/' . $job->user->photo_profile) }}"
                          alt=""
                          class=""
                        />
                        @else
                        <img
                          src="/img/freelancer/baesuzy.png"
                          alt=""
                          class=""
                        />
                        @endif
                      </div>
                      <div class="col-6 job-details-about-owner-data-name">
                          <div class="d-flex align-items-center">
                              <h5 class="mb-2"><a href="/{{ $job->user->username }}">{{ $job->user->full_name }}</a></h5>
                              @if ($job->user->is_verified == true)
                                <img src="/img/icon/verified/verified.svg" alt="" class="verified-icon ms-2">
                              @endif
                          </div>
                        <p class="mb-2">
                          "{{ $job->user->quote }}"
                        </p>
                        <h6 class="mb-3"> {{ $job->user->university }}</h6>
                        {{-- <div class="d-flex justify-content-center justify-content-md-start align-items-center mb-3">
                          <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                          />
                          <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                          />
                          <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                          />
                          <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                          />
                          <img
                            src="/img/icon/card/star.svg"
                            alt=""
                            class="mb-0 me-1"
                          />
                          <p class="freelancer-rating mb-0 me-1">4.9</p>
                          <p class="freelancer-rating-count mb-0">
                            (2354 Reviews)
                          </p>
                        </div> --}}
                        <a href="/{{ $job->user->username }}">
                            <button type="button" class="button-contact">
                              Lihat Profil
                            </button>
                        </a>
                      </div>
                    </div>
                    <div
                      class="mb-4 border-bottom text-center text-md-start job-details-about-owner-detail"
                    >
                      <div class="row">
                        <div class="col-md-6">
                          <h6 class="mb-1 job-details-about-owner-detail-info">
                            Location <i class="uil uil-map-marker"></i>
                          </h6>
                          <div
                            class="d-flex justify-content-center justify-content-md-start"
                          >
                            <p class="me-2">{{ $job->user->region }}</p>
                            <img
                              src="/img/flags/{{ $job->user->region_id }}.svg"
                              alt=""
                              class="mt-1"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h6 class="mb-1 job-details-about-owner-detail-info">
                            Member Since <i class="uil uil-user-check"></i>
                          </h6>
                          <p class="">{{ \Carbon\Carbon::parse($job->user->created_at)->format('M Y') }}</p>
                        </div>
                      </div>
                      {{-- <div class="row">
                        <div class="col-md-6">
                          <h6 class="mb-1 job-details-about-owner-detail-info">
                            Avg. Response Time <i class="uil uil-clock"></i>
                          </h6>
                          <p class="">10 hours</p>
                        </div>
                        <div class="col-md-6">
                          <h6 class="mb-1 job-details-about-owner-detail-info">
                            Last Order <i class="uil uil-message"></i>
                          </h6>
                          <p class="">21 hours</p>
                        </div>
                      </div> --}}
                    </div>
                    <div
                      class="text-center text-md-start job-details-about-owner-description justify-content-center justify-content-md-start align-items-center"
                    >
                      <p>
                        {{ $job->user->description }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- KANAN -->
            <div class="col-lg-4 mb-4">
              <div class="position-sticky" style="top: 200px">
                <div class="job-package-box mb-4">
                  <nav class="tab-drop-nav">
                    <div
                      class="nav nav-tabs d-flex justify-content-around"
                      id="nav-tab"
                      role="tablist"
                    >
                      <button
                        class="nav-link active"
                        id="nav-home-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-home"
                        type="button"
                        role="tab"
                        aria-controls="nav-home"
                        aria-selected="true"
                      >
                        PACKAGE
                      </button>
                      {{-- <button
                        class="nav-link"
                        id="nav-profile-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-profile"
                        type="button"
                        role="tab"
                        aria-controls="nav-profile"
                        aria-selected="false"
                      >
                        Standard
                      </button>
                      <button
                        class="nav-link"
                        id="nav-contact-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-contact"
                        type="button"
                        role="tab"
                        aria-controls="nav-contact"
                        aria-selected="false"
                      >
                        Premium
                      </button> --}}
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div
                      class="tab-pane fade show active"
                      id="nav-home"
                      role="tabpanel"
                      aria-labelledby="nav-home-tab"
                    >
                      <div class="job-package-description p-4">
                        <div class="row mb-3 align-items-center">
                          <div class="col-7">
                            <h5 class="job-package-description-title">
                              {{ $job->package_name }}
                            </h5>
                          </div>
                          <div class="col-5 text-end">
                            <h5>@currency($job->price)</h5>
                          </div>
                        </div>

                        <p class="mb-3">
                          {{ $job->package_description }}
                        </p>

                        <div
                          class="row mb-3 job-package-description-deliver-revision"
                        >
                          <div class="col">
                            <p>
                              <i class="uil uil-clock-three"></i> {{ $job->job_delivery }} hari pengerjaan
                            </p>
                          </div>
                          <div class="col">
                            <p><i class="uil uil-sync"></i> {{ $job->revision }} revisi</p>
                          </div>
                        </div>

                        {{-- WHAT'S INCLUDED COLLAPSE --}}
                        {{-- <div class="mb-3">
                          <a
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#job-categories"
                            aria-expanded="false"
                          >
                            <div class="row align-items-center mb-0">
                              <div class="col-10">
                                <h6>What's included</h6>
                              </div>
                              <div class="col-2 text-end">
                                <button
                                  class="job-package-accordion-arrow-button align-items-center"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#job-categories"
                                  aria-expanded="false"
                                >
                                  <i
                                    class="uil uil-angle-right-b p-0 arrow-icon"
                                  ></i>
                                </button>
                              </div>
                            </div>
                          </a>
                          <div class="collapse" id="job-categories">
                            <ul
                              class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                            >
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                2 Initial Concepts Included
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Source File
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Logo Transparency
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                High Resolution
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                3D Mockup
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Vektor File
                              </li>
                            </ul>
                          </div>
                        </div> --}}

                        <a href="/jobs/{{ $job->slug }}/payment">
                            <button type="button" class="button-continue mb-2">
                              Continue (@currency($job->price))
                            </button>
                        </a>

                        <button
                          type="button"
                          class="button-contact-seller mb-3"
                        >
                          Contact Seller
                        </button>
                        {{-- <div class="compare-packages-link text-center">
                          <a href="#">Compare Packages</a>
                        </div> --}}
                      </div>
                    </div>

                    {{-- <div
                      class="tab-pane fade"
                      id="nav-profile"
                      role="tabpanel"
                      aria-labelledby="nav-profile-tab"
                    >
                        <div class="job-package-description p-4">
                            <div class="row mb-3 align-items-center">
                            <div class="col-8">
                                <h5 class="job-package-description-title">
                                PRO - Best Selling
                                </h5>
                            </div>
                            <div class="col-4 text-end">
                                <h5>US$50</h5>
                            </div>
                            </div>

                            <p class="mb-3">
                            3 PRO concepts - Choose one and finalize + Source
                            files + 3D Mockup
                            </p>

                            <div
                            class="row mb-3 job-package-description-deliver-revision"
                            >
                            <div class="col">
                                <p>
                                <i class="uil uil-clock-three"></i> 3 Days
                                Delivery
                                </p>
                            </div>
                            <div class="col">
                                <p><i class="uil uil-sync"></i> 12 Revisions</p>
                            </div>
                            </div>

                            <div class="mb-3">
                            <a
                                class="collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#job-categories"
                                aria-expanded="false"
                            >
                                <div class="row align-items-center mb-0">
                                <div class="col-10">
                                    <h6>What's included</h6>
                                </div>
                                <div class="col-2 text-end">
                                    <button
                                    class="job-package-accordion-arrow-button align-items-center"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#job-categories"
                                    aria-expanded="false"
                                    >
                                    <i
                                        class="uil uil-angle-right-b p-0 arrow-icon"
                                    ></i>
                                    </button>
                                </div>
                                </div>
                            </a>
                            <div class="collapse" id="job-categories">
                                <ul
                                class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                                >
                                <li class="mb-1">
                                    <i class="uil uil-check include-check-icon"></i>
                                    3 Initial Concepts Included
                                </li>
                                <li class="mb-1">
                                    <i class="uil uil-check include-check-icon"></i>
                                    Source File
                                </li>
                                <li class="mb-1">
                                    <i class="uil uil-check include-check-icon"></i>
                                    Logo Transparency
                                </li>
                                <li class="mb-1">
                                    <i class="uil uil-check include-check-icon"></i>
                                    High Resolution
                                </li>
                                <li class="mb-1">
                                    <i class="uil uil-check include-check-icon"></i>
                                    3D Mockup
                                </li>
                                <li class="mb-1">
                                    <i class="uil uil-check include-check-icon"></i>
                                    Vector File
                                </li>
                                </ul>
                            </div>
                            </div>

                            <button type="button" class="button-continue mb-2">
                            Continue (US$50)
                            </button>
                            <button
                            type="button"
                            class="button-contact-seller mb-3"
                            >
                            Contact Seller
                            </button>
                            <div class="compare-packages-link text-center">
                            <a href="#">Compare Packages</a>
                            </div>
                        </div>
                    </div>

                    <div
                      class="tab-pane fade"
                      id="nav-contact"
                      role="tabpanel"
                      aria-labelledby="nav-contact-tab"
                    >
                      <div class="job-package-description p-4">
                        <div class="row mb-3 align-items-center">
                          <div class="col-8">
                            <h5 class="job-package-description-title">
                              VIP - Best Value
                            </h5>
                          </div>
                          <div class="col-4 text-end">
                            <h5>US$100</h5>
                          </div>
                        </div>

                        <p class="mb-3">
                          4 HQ logos + Source files + 3D mockup Social media
                          images and stationary + Priority Service
                        </p>

                        <div
                          class="row mb-3 job-package-description-deliver-revision"
                        >
                          <div class="col">
                            <p>
                              <i class="uil uil-clock-three"></i> 3 Days
                              Delivery
                            </p>
                          </div>
                          <div class="col">
                            <p>
                              <i class="uil uil-sync"></i> Unlimited Revisions
                            </p>
                          </div>
                        </div>

                        <div class="mb-3">
                          <a
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#job-categories"
                            aria-expanded="false"
                          >
                            <div class="row align-items-center mb-0">
                              <div class="col-10">
                                <h6>What's included</h6>
                              </div>
                              <div class="col-2 text-end">
                                <button
                                  class="job-package-accordion-arrow-button align-items-center"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#job-categories"
                                  aria-expanded="false"
                                >
                                  <i
                                    class="uil uil-angle-right-b p-0 arrow-icon"
                                  ></i>
                                </button>
                              </div>
                            </div>
                          </a>
                          <div class="collapse" id="job-categories">
                            <ul
                              class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                            >
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                4 Initial Concepts Included
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Source File
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Logo Transparency
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                High Resolution
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                3D Mockup
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Stationery Designs
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Social Media Kit
                              </li>
                              <li class="mb-1">
                                <i class="uil uil-check include-check-icon"></i>
                                Vector File
                              </li>
                            </ul>
                          </div>
                        </div>

                        <button type="button" class="button-continue mb-2">
                          Continue (US$100)
                        </button>
                        <button
                          type="button"
                          class="button-contact-seller mb-3"
                        >
                          Contact Seller
                        </button>
                        <div class="compare-packages-link text-center">
                          <a href="#">Compare Packages</a>
                        </div>
                      </div>
                    </div> --}}

                  </div>
                </div>

                <!-- <div class="job-package-box">
                  <div class="job-package-section text-center py-2">
                    <h3>Basic</h3>
                  </div>

                  <div class="job-package-description p-4">
                    <div class="row mb-3 align-items-center">
                      <div class="col-8">
                        <h5 class="job-package-description-title">
                          PRO - Best Selling
                        </h5>
                      </div>
                      <div class="col-4 text-end">
                        <h5>US$140</h5>
                      </div>
                    </div>

                    <p class="mb-3">
                      4 HQ logos + Source files + 3D mockup Social media images
                      and stationary + Priority Service
                    </p>

                    <div
                      class="row mb-3 job-package-description-deliver-revision"
                    >
                      <div class="col">
                        <p>
                          <i class="uil uil-clock-three"></i> 3 Days Delivery
                        </p>
                      </div>
                      <div class="col">
                        <p><i class="uil uil-sync"></i> Unlimited Revisions</p>
                      </div>
                    </div>

                    <div class="mb-3">
                      <a
                        class="collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#job-categories"
                        aria-expanded="false"
                      >
                        <div class="row align-items-center mb-0">
                          <div class="col-10">
                            <h6>What's included</h6>
                          </div>
                          <div class="col-2 text-end">
                            <button
                              class="
                                job-package-accordion-arrow-button
                                align-items-center
                              "
                              data-bs-toggle="collapse"
                              data-bs-target="#job-categories"
                              aria-expanded="false"
                            >
                              <i
                                class="uil uil-angle-right-b p-0 arrow-icon"
                              ></i>
                            </button>
                          </div>
                        </div>
                      </a>
                      <div class="collapse" id="job-categories">
                        <ul
                          class="
                            btn-toggle-nav
                            list-unstyled
                            fw-normal
                            pb-1
                            small
                          "
                        >
                          <li class="mb-1">
                            <i class="uil uil-check include-check-icon"></i>
                            Desain Logo
                          </li>
                          <li class="mb-1">
                            <i class="uil uil-check include-check-icon"></i>
                            Ilustrasi
                          </li>
                          <li class="mb-1">
                            <i class="uil uil-check include-check-icon"></i> UI
                            / UX Aplikasi Website & Mobile
                          </li>
                          <li class="mb-1">
                            <i class="uil uil-check include-check-icon"></i>
                            Desain Media Sosial
                          </li>
                          <li class="mb-1">
                            <i class="uil uil-check include-check-icon"></i>
                            Edit Gambar & Photoshop
                          </li>
                          <li class="mb-1">
                            <i class="uil uil-check include-check-icon"></i>
                            Model Karakter
                          </li>
                        </ul>
                      </div>
                    </div>

                    <button type="button" class="button-continue mb-2">
                      Continue (US$140)
                    </button>
                    <button type="button" class="button-contact-seller mb-3">
                      Contact Seller
                    </button>
                    <div class="compare-packages-link text-center">
                      <a href="#">Compare Packages</a>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
@endsection
