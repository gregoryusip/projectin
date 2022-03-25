<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Unicons -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/css/owl.theme.default.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css" />

    <title>Project-In</title>
  </head>
  <body>
    <div class="app">
      <!-- NAVBAR -->
      <header class="fixed-top header" id="header">
        <nav class="navbar navbar-expand-lg text-center py-3" id="navbar">
          <div class="container-md">
            <a class="navbar-brand justify-content-start" href="#"
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
              <form class="d-flex mt-3 mt-lg-0 search-form-container">
                <div class="input-group search-form-input">
                  <span class="input-group-text py-0" id="basic-addon1">
                    <i class="uil uil-search search-form-icon"></i
                  ></span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                </div>
              </form>

              <ul class="navbar-nav ms-auto my-3 my-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pesan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Favorit</a>
                </li>
              </ul>

              <div
                class="
                  dropdown
                  d-flex
                  justify-content-center
                  align-items-center
                  ms-auto
                "
              >
                <p class="mb-0 me-3 nav-user-name">Hi, Gregoryus</p>
                <a
                  href="#"
                  class="d-block link-dark text-decoration-none dropdown-toggle"
                  id="dropdownUser1"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="https://github.com/mdo.png"
                    alt="mdo"
                    width="32"
                    height="32"
                    class="rounded-circle"
                  />
                </a>
                <ul
                  class="dropdown-menu text-small"
                  aria-labelledby="dropdownUser1"
                >
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- CATEGORY NAV CAROUSEL -->
        <div class="container-fluid mb-5 category-nav-carousel">
          <div class="container">
            <div class="nav-scroller py-1 mb-2">
              <nav class="nav d-flex justify-content-between">
                <a class="p-2" href="#">Grafis & Design</a>
                <a class="p-2" href="#">Programming</a>
                <a class="p-2" href="#">Digital Marketing</a>
                <a class="p-2" href="#">Penulisan & Penerjemahan</a>
                <a class="p-2" href="#">Video & Animasi</a>
                <a class="p-2" href="#">Musik & Audio</a>
                <a class="p-2" href="#">Bisnis</a>
                <a class="p-2" href="#">Gaya Hidup</a>
                <a class="p-2" href="#">Industri</a>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <main>
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
                Kami menyediakan layanan dalam mencari pekeraan ataupun
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
            <div class="col-md px-0 mx-4">
              <a href="#">
                <img
                  src="/img/icon/category/creativity.svg"
                  alt=""
                  class="category_img img-fluid mb-3"
                />
                <p>Graphic & Design</p>
              </a>
            </div>
            <div class="col-md px-0 mx-4">
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
                <p>Writing & Translation</p>
              </a>
            </div>
            <div class="col-md px-0 mx-4">
              <a href="#">
                <img
                  src="/img/icon/category/video.svg"
                  alt=""
                  class="category_img img-fluid mb-3"
                />
                <p>Video & Animation</p>
              </a>
            </div>
            <div class="col-md px-0 mx-4">
              <a href="#">
                <img
                  src="/img/icon/category/music.svg"
                  alt=""
                  class="category_img img-fluid mb-3"
                />
                <p>Music & Audio</p>
              </a>
            </div>
            <div class="col-md px-0 mx-4">
              <a href="#">
                <img
                  src="/img/icon/category/business.svg"
                  alt=""
                  class="category_img img-fluid mb-3"
                />
                <p>Business</p>
              </a>
            </div>
            <div class="col-md px-0 mx-4">
              <a href="#">
                <img
                  src="/img/icon/category/lifestyle.svg"
                  alt=""
                  class="category_img img-fluid mb-3"
                />
                <p>Life Style</p>
              </a>
            </div>
            <div class="col-md px-0 mx-4">
              <a href="#">
                <img
                  src="/img/icon/category/industry.svg"
                  alt=""
                  class="category_img img-fluid mb-3 text-center"
                />
                <p>Industry</p>
              </a>
            </div>
          </div>
        </div>

        <!-- PROJECT POPULER MINGGU INI -->
        <div class="container mb-5">
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
        </div>

        <!-- ALASAN PROJECT-IN -->
        <div class="container-fluid container-alasan pt-4">
          <div class="container mb-5">
            <div class="section_title text-center mb-1">
              <h3>ALASAN PROJECT-IN</h3>
            </div>
            <div class="section_subtitle text-center mb-4 mb-md-5">
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
      </main>

      <!-- FOOTER -->
      <div class="container-fluid container-footer pt-5">
        <div class="container">
          <footer class="">
            <div class="row mb-3">
              <div class="col-md mb-3">
                <h5 class="mb-3">Kategori</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="p-0">Grafis dan Design</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Programming</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Digital Marketing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Penulisan dan Penerjamahan</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Video dan Animasi</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Musik dan Audio</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Bisnis</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Gaya Hidup</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Industri</a></li>
                </ul>
              </div>
              <div class="col-md mb-3">
                <h5 class="mb-3">Panduan</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="p-0">Cara Menjadi Client</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Cara Menjadi Freelancer</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Sistem Pekerjaan</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Pembayaran</a></li>
                </ul>
              </div>
              <div class="col-md mb-3">
                <h5 class="mb-3">Project-In</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="p-0">Tentang Kami</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Partner</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Pers dan Berita</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Karir</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Kebijakan Privasi</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Persyaratan Layanan</a></li>
                </ul>
              </div>
              <div class="col-md mb-3">
                <h5 class="mb-3">Hubungi Kami</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="p-0">Customer Service</a></li>
                  <li class="nav-item mb-2"><a href="#" class="p-0">Feedback</a></li>
                </ul>
              </div>
            </div>
            <div class=" row footer-copy-right text-center text-md-start align-items-center justify-content-center">
              <div class="col-sm">
                <img src="/img/logo/logo.svg" alt="" class="me-3 footer-brand-logo">
              </div>
              <div class="col-sm text-center">
                <p class="mt-2">&copy; 2021 Company, Inc. All rights reserved.</p>
              </div>
              <!-- <div class="d-flex align-items-center justify-content-center">
              </div> -->
              <div class="col-sm">
                <ul class="list-unstyled d-flex justify-content-center justify-content-md-end">
                  <li class="ms-3"><a class="link-dark" href="#"><i class="uil uil-twitter"></i></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><i class="uil uil-instagram-alt"></i></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><i class="uil uil-facebook"></i></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><i class="uil uil-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Owl Carousel -->
    <script src="/js/owl.carousel.js"></script>

    <!-- My Script -->
    <script src="/js/main.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
