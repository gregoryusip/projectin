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
    <link rel="stylesheet" href="/css/style-authenticate.css" />

    <title>Login | Project-In</title>
  </head>
  <body>
    <div class="container-fluid">

      <div class="row login-page justify-content-center align-items-center">
            <!-- LEFT SIDE -->
            <div class="col-lg-7 col-xl-6 py-5 px-4 px-lg-5 login-left-side column">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h6 class="text-end mb-3"><a href="/">Kembali ke Halaman Utama</a></h6>
            <h2 class="mb-5 text-start">Masuk</h2>

            <form class="mb-3" action="/login" method="post">
                @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email" required>
                <div id="email" class="form-text">Contoh: project@gmail.com</div>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                @enderror
              </div>

              <div class="form-password mb-5">
                <label for="password" class="form-label">Password</label>
                <div class="password-form">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-field" name="password" required>
                  <i toggle="#password-field" class="uil uil-eye toggle-password"></i>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                @enderror
                <div id="forgot-password" class="form-text">Lupa Password? <a href="#">Click here</a></div>
              </div>

              <button type="submit" class="button-submit">Masuk</button>
            </form>

            <h6 class="text-center">Belum memiliki Akun Freelancer? <a href="/register">Daftar Sekarang</a></h6>

        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-5 col-xl-6 py-5 px-4 px-lg-5 login-right-side text-center align-content-center column">
          <h1 class="mb-5">
            <span>Kerja sama</span> menjadi kunci <span>kesuksesan</span> sebuah
            <span>tim</span>
          </h1>
          <img
            src="/img/icon/authenticate/team_work.svg"
            alt=""
            class="img-fluid"
          />
      </div>
    </div>

    <script src="/js/main.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
