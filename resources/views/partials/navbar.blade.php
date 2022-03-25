{{-- NAVBAR --}}
<header class="fixed-top header" id="header">
        <nav class="navbar navbar-expand-lg text-center py-3" id="navbar">
          <div class="container-md">
            <a class="navbar-brand justify-content-start" href="/"
              ><img src="/img/logo/logo.svg" alt="" class="img-fluid"
            /></a>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse"
              aria-controls="navbarCollapse"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <input type="checkbox" />
              <span></span>
              <span></span>
              <span></span>
            </button>

            <div
              class="collapse navbar-collapse text-center"
              id="navbarCollapse"
            >
              <form class="d-flex mt-3 mt-lg-0 search-form-container" action="/jobs/all-jobs">
                <div class="input-group search-form-input">
                    <span class="input-group-text py-0" id="basic-addon1">
                        <i class="uil uil-search search-form-icon"></i>
                    </span>
                    <input
                        type="search"
                        class="form-control"
                        placeholder="Search"
                        name="search"
                        id="search"
                        value="{{ request('search') }}"
                    />
                </div>
              </form>

              <ul class="navbar-nav ms-auto my-3 my-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="/categories">Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/jobs">Job</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/freelancers">Freelancer</a>
                </li>
              </ul>

              @auth
              <div
                class="
                  dropdown
                  d-flex
                  justify-content-center
                  align-items-center
                  ms-auto
                "
              >
                <p class="mb-0 me-3 nav-user-name">Hi, {{ auth()->user()->first_name }}</p>
                <a
                  href="#"
                  class="d-block link-dark text-decoration-none dropdown-toggle"
                  id="dropdownUser1"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                    @if ( auth()->user()->photo_profile )
                    <img

                      src="{{ asset('storage/' . auth()->user()->photo_profile) }}",
                      alt="mdo"
                      width="32"
                      height="32"
                      class="rounded-circle"
                    />
                    @else
                    <img
                      src="https://github.com/mdo.png"
                      alt="mdo"
                      width="32"
                      height="32"
                      class="rounded-circle"
                    />
                    @endif
                </a>
                <ul
                  class="dropdown-menu text-small"
                  aria-labelledby="dropdownUser1"
                >
                  <li><a class="dropdown-item" href="/dashboard/jobs/create">Post new Job</a></li>
                  <li><a class="dropdown-item" href="/profile/{{ auth()->user()->username }}">Profile</a></li>

                  @can('is_admin')
                  <li><a class="dropdown-item" href="/dashboard/verify">Verifying Freelancer</a></li>
                  @endcan

                  {{-- <li><a class="dropdown-item" href="#">Settings</a></li> --}}
                  <li><hr class="dropdown-divider" /></li>
                  {{-- <li><a class="dropdown-item" href="#">Sign out</a></li> --}}
                  <li>
                        <form form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Sign out</button>
                        </form>
                    </li>
                </ul>
              </div>
              @else
              <ul class="navbar-nav ms-auto my-3 my-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
              </ul>
              @endauth

            </div>
          </div>
        </nav>
        <!-- CATEGORY NAV CAROUSEL -->
        <div class="container-fluid mb-5 category-nav-carousel">
          <div class="container">
            <div class="nav-scroller py-1 mb-2">
              <nav class="nav d-flex justify-content-between">
                  @foreach ($categories as $category)
                    <a class="p-2" href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                  @endforeach
                {{-- <a class="p-2" href="#">Grafis & Design</a>
                <a class="p-2" href="#">Programming</a>
                <a class="p-2" href="#">Digital Marketing</a>
                <a class="p-2" href="#">Penulisan & Penerjemahan</a>
                <a class="p-2" href="#">Video & Animasi</a>
                <a class="p-2" href="#">Musik & Audio</a>
                <a class="p-2" href="#">Bisnis</a>
                <a class="p-2" href="#">Gaya Hidup</a>
                <a class="p-2" href="#">Trending</a> --}}
              </nav>
            </div>
          </div>
        </div>
      </header>
