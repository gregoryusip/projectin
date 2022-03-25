@extends('layouts.main')

@section('container')
<!-- PROFILE BOX -->
<div class="container my-5 profile-box text-center text-lg-start">
    <div
    class="row h-100 py-4 px-5 justify-content-center align-items-center"
    >
        @if ( $user->photo_profile )
        <div class="col-md-4 col-lg-2 mb-2 mb-lg-0 text-center">
            <img
            src="{{ asset('storage/' . $user->photo_profile) }}"
            alt=""
            class="profile-img img-fluid"
            />
        </div>
        @else
        <div class="col-md-4 col-lg-2 mb-2 mb-lg-0 text-center">
            <img
            src="/img/freelancer/baesuzy.png"
            alt=""
            class="profile-img img-fluid"
            />
        </div>
        @endif
        {{-- <div class="col-md-4 col-lg-2 mb-2 mb-lg-0 text-center">
            <img
            src="/img/freelancer/baesuzy.png"
            alt=""
            class="profile-img img-fluid"
            />
        </div> --}}

        <div class="col-md-8 col-lg-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
                <h3 class="mb-2">{{ $user->full_name }}</h3>
                @if ($user->is_verified == true)
                <img src="/img/icon/verified/verified.svg" alt="" class="verified-icon ms-2">
                @endif
            </div>
            <h5 class="mb-2">{{ $user->role }}</h5>
            <p class="mb-3">"{{ $user->quote }}"</p>
            {{-- <h6 class="mb-3">85 Service(s)</h6>
            <div
            class="d-flex justify-content-center justify-content-lg-start align-items-center"
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
                    class="mb-0 me-2"
                />
                <p class="profile-job-rating mb-0 me-2">4.9</p>
                <p class="profile-job-rating-count mb-0">
                    (2354 Reviews)
                </p>
            </div> --}}
        </div>

        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
            <div
            class="row text-start justify-content-center align-items-center"
            >
                <div class="col-6 d-flex">
                    <i class="uil uil-map-marker"></i>
                    <p class="ms-2">Location</p>
                </div>
                <div class="col-6 text-end">
                    <p class="profile-box-feature-answer">{{ $user->region }}</p>
                </div>
            </div>
            <div
            class="row text-start justify-content-center align-items-center"
            >
                <div class="col-6 d-flex">
                    <i class="uil uil-user-check"></i>
                    <p class="ms-2">Member Since</p>
                </div>
                <div class="col-6 text-end">
                    <p class="profile-box-feature-answer">{{ \Carbon\Carbon::parse($user->created_at)->format('M Y') }}</p>
                </div>
            </div>
            {{-- <div class="row text-start justify-content-center align-items-center">
                <div class="col-6 d-flex">
                    <i class="uil uil-clock"></i>
                    <p class="ms-2">Avg. Response</p>
                </div>
                <div class="col-6 text-end">
                    <p class="profile-box-feature-answer">10 hours</p>
                </div>
            </div> --}}
            {{-- <div class="row text-start justify-content-center align-items-center">
                <div class="col-6 d-flex">
                    <i class="uil uil-message"></i>
                    <p class="ms-2">Last Order</p>
                </div>
                <div class="col-6 text-end">
                    <p class="profile-box-feature-answer">23 hours</p>
                </div>
            </div> --}}
        </div>

        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0 profile-box-reaction">
            <div class="row mb-2">
            <div class="col text-end">
                <a href="/profile/{{ $user->username }}/edit">
                    <button
                        type="button"
                        class="button-tooltip"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Edit Profile"
                    >
                        <i class="uil uil-edit-alt me-2"></i>
                    </button>
                </a>
                {{-- <a href="#">
                    <button
                        type="button"
                        class="button-tooltip"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Save to List"
                    >
                        <i class="uil uil-heart-alt"></i>
                    </button>
                </a> --}}
            </div>
            </div>
            <div class="row mb-2 text-center">
                <a href="https://api.whatsapp.com/send?phone={{ $link_whatsapp }}&text=Test%20Link%20Website%20Projectin%20ya%20Boss%20!!!" target="_blank"
                    ><button class="button-first-profile">Contact Me</button>
                </a>
            </div>
            {{-- <div class="row mb-2 text-center">
                <a href="#"
                    ><button class="button-second-profile">Get Quote</button>
                </a>
            </div> --}}
        </div>
    </div>
</div>

<!-- MY GIG'S -->
<div class="container mb-5">
    <div class="row">
        <div class="col-lg-4 mb-3 ps-lg-0">
            <div class="profile-descriptions-box mb-3 py-4 px-5">
            <div class="profile-descriptions mb-3 border-bottom">
                <h5 class="mb-4">Description</h5>
                <p>
                {{ $user->description }}
                </p>
            </div>

            <div class="profile-languages mb-3 border-bottom">
                <h5 class="mb-4">Languages</h5>

                @empty($languages)
                    @foreach ($languages as $language)
                        <p>{{ $language->name }} - <span>{{ $language->level_language->name }}</span></p>
                    @endforeach
                @else
                    <p>-</p>
                @endempty
                {{-- <p>English - <span>Fluent/Billinguals</span></p>
                <p>Korean - <span>Fluent</span></p> --}}
            </div>

            <div class="profile-educations mb-3 border-bottom">
                <h5 class="mb-4">Education</h5>

                @empty($educations)
                    @foreach ($educations as $education)
                        <p>
                        {{ $education->title }} - {{ $education->major }} <br />
                        <span>{{ $education->name }}, {{ $education->region }}, Graduated {{ $education->year }}</span>
                        </p>
                    @endforeach
                @else
                        <p>-</p>
                @endempty
                {{-- <p>
                B.Sc. - Bachelor In Computer Engineering <br />
                <span>Engineering College, Korea, Graduated 2014</span>
                </p> --}}
            </div>
            <div class="profile-certifications mb-3 border-bottom">
                <h5 class="mb-4">Certifications</h5>

                @empty($certifications)
                    @foreach ($certifications as $certification)
                        <p>
                        {{ $certification->title }}<br />
                        <span>{{ $certification->name }}, {{ $certification->year }}</span>
                        </p>
                    @endforeach
                @else
                        <p>-</p>
                @endempty
                {{-- <p>
                Cisco Certified Network Associate 2014<br />
                <span>Cisco 2014</span>
                </p>
                <p>
                Logo Design Courses<br />
                <span>Fiverr Learn 2019</span>
                </p>
                <p>
                Best Exporter Of Korea<br />
                <span>Payoneer 2020</span>
                </p> --}}
            </div>
            <div class="profile-skills mb-3">
                <h5 class="mb-4">Skills</h5>
                <div class="row">
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Logo Design</a>
                </div>
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Adobe Photoshop</a>
                </div>
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Adobe Illustrator</a>
                </div>
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Graphic Design</a>
                </div>
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Stationary Design</a>
                </div>
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Minimalist Design</a>
                </div>
                <div class="col-6 mb-4">
                    <a href="#" class="profile-skill">Modern Logo</a>
                </div>
                </div>
            </div>
            </div>
            <div class="profile-portfolios-box mb-3 py-4 px-5">
                <h5 class="mb-4">My Portfolio</h5>
                <p>PORTFOLIO, CAPEK HYUNG</p>

                @empty(!$user->phone_number)
                <div class="row  align-content-center">
                    <div class="col-1 social-media-links">
                        <i class="uil uil-whatsapp"></i>
                    </div>
                    <div class="col-11 mt-1">
                        <a href="https://api.whatsapp.com/send?phone={{ $link_whatsapp }}&text=Test%20Link%20Website%20Projectin%20ya%20Boss%20!!!" target="_blank">
                            <p>{{ $user->phone_number }}</p>
                        </a>
                    </div>
                </div>
                @endempty

                @empty(!$user->email)
                <div class="row  align-content-center">
                    <div class="col-1 social-media-links">
                        <i class="uil uil-envelope-alt"></i>
                    </div>
                    <div class="col-11 mt-1">
                        <a href="#" target="_blank">
                            <p>{{ $user->email }}</p>
                        </a>
                    </div>
                </div>
                @endempty

                @empty(!$user->portfolio_link)
                <div class="row  align-content-center">
                    <div class="col-1 social-media-links">
                        <i class="uil uil-link"></i>
                    </div>
                    <div class="col-11 mt-1">
                        <a href="{{ $user->portfolio_link }}" target="_blank">
                            <p>{{ $user->portfolio_link }}</p>
                        </a>
                    </div>
                </div>
                @endempty

                @empty(!$user->dribbble_link)
                <div class="row  align-content-center">
                    <div class="col-1 social-media-links">
                        <i class="uil uil-dribbble"></i>
                    </div>
                    <div class="col-11 mt-1">
                        <a href="{{ $user->dribbble_link }}" target="_blank">
                            <p>{{ $user->dribbble_link }}</p>
                        </a>
                    </div>
                </div>
                @endempty

                @empty(!$user->github_link)
                <div class="row  align-content-center">
                    <div class="col-1 social-media-links">
                        <i class="uil uil-github-alt"></i>
                    </div>
                    <div class="col-11 mt-1">
                        <a href="{{ $user->github_link }}" target="_blank">
                            <p>{{ $user->github_link }}</p>
                        </a>
                    </div>
                </div>
                @endempty

                @empty(!$user->facebook_link)
                <div class="row  align-content-center">
                    <div class="col-1 social-media-links">
                        <i class="uil uil-facebook-f"></i>
                    </div>
                    <div class="col-11 mt-1">
                        <a href="{{ $user->facebook_link }}" target="_blank">
                            <p>{{ $user->facebook_link }}</p>
                        </a>
                    </div>
                </div>
                @endempty
            </div>
        </div>

        <div class="col-lg-8 mb-3 pe-md-0">
            <div class="my-gigs-box ps-2">
                <div class="row align-items-center  mb-4 mb-md-4">
                    <div class="col-md-8">
                        <div class="section_title mb-1">
                            <h3>{{ $user->first_name }}'s Gig's</h3>
                        </div>
                        <div class="section_subtitle">
                            <p>Temukan Service yang anda mau pada Gis's milik {{ $user->first_name }}</p>
                        </div>
                </div>

                    {{-- @auth --}}
                    <div class="col-md-4 text-start text-md-end">
                        <a href="/dashboard/jobs/create">
                            <button type="button" class="button-contact">
                              Create a Gig
                            </button>
                        </a>
                    </div>
                    {{-- @endauth --}}
                </div>
                <div class="row">
                    {{-- <div class="col-md-6 col-lg-6 col-xl-4 mb-4">
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
                                class="row job-card-name justify-content-center align-items-center mb-3"
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
                    @foreach ($jobs as $job)
                    <div class="col-md-6 col-lg-6 col-xl-4 mb-4">
                        <div class="card job-card">

                            <a href="/jobs/{{ $job->slug }}">
                                @if ($job->job_image->count())
                                <img
                                src="{{ asset('storage/' . $job->job_image[0]->image) }}"
                                class="card-img-top job-portfolio img-fluid"
                                alt="..."
                                />
                                    {{-- @foreach ($job->job_image as $images)
                                    @endforeach --}}
                                @else
                                <img
                                src="/img/portfolio/1.svg"
                                class="card-img-top job-portfolio img-fluid"
                                alt="..."
                                />
                                @endif
                            </a>
                            <div class="card-body">
                                <div
                                class="
                                    row
                                    job-card-name
                                    justify-content-center
                                    align-items-center
                                    mb-3"
                                >
                                    <div class="col-3 job-photo-container">
                                        @if ($user->photo_profile)
                                        <img
                                        src="{{ asset('storage/' . $user->photo_profile) }}"
                                        alt=""
                                        class="job-img"
                                        />
                                        @else
                                        <img
                                        src="/img/freelancer/baesuzy.png"
                                        alt=""
                                        class="job-img"
                                        />
                                        @endif
                                    </div>
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

                                <div class="row mb-3">
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
                                <div class="row justify-content-center text-center">
                                    <div class="col-md-6">
                                        <a href="/dashboard/jobs/{{ $job->slug }}/edit">
                                            <button type="submit" class="button-submit">Edit</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="/dashboard/jobs/{{ $job->slug }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="button-delete" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
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
