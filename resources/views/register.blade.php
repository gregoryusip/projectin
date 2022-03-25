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

    <title>Register Client | Project-In</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row register-page justify-content-center align-items-center">
        <!-- LEFT SIDE -->
        <div class="col-lg-5 col-xl-6 py-5 px-4 px-lg-5 text-center register-left-side column">
            <h1 class="mb-5">
                Temukan <span>Project</span> dan <span>Keuntungan</span> dengan
                <span>PROJECT-IN</span>
              </h1>
              <img
                src="/img/icon/authenticate/freelancer.svg"
                alt=""
                class="img-fluid"
            />
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-7 col-xl-6 py-5 px-4 px-lg-5 register-right-side column">
            <h6 class="text-end mb-3"><a href="/">Kembali ke Halaman Utama</a></h6>
            <h2 class="mb-5">Daftar Sebagai Freelancer</h2>

            <form class="mb-3" action="/register" method="POST">
                @csrf
              <div class="row">
                <div class="col-lg mb-2">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" aria-describedby="name" required>
                  <div id="firstName" class="form-text">Contoh: Jane</div>
                  @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                </div>

                <div class="col-lg mb-2">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" aria-describedby="username" required>
                  <div id="lastName" class="form-text">Contoh: xyz123</div>
                  @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                </div>
              </div>

              <div class="row">
                  <div class="col-lg mb-2">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" aria-describedby="email" required>
                    <div id="email" class="form-text">Contoh: project@gmail.com</div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                  </div>

                  <div class="col-lg mb-2">
                    <label for="phone_number" class="form-label">No. Handphone</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" aria-describedby="phone_number" required>
                    <div id="phone_number" class="form-text">Contoh: 082189147764</div>
                    @error('phone_number')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg mb-2">
                    <label for="university" class="form-label">Universitas</label>
                    <input type="text" class="form-control @error('university') is-invalid @enderror" id="university" name="university" value="{{ old('university') }}" aria-describedby="university" required>
                    <div id="university" class="form-text">Contoh: Bina Nusantara University</div>
                    @error('university')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                  </div>

                  <div class="col-lg mb-2">
                    <label for="region" class="form-label">Negara Asal</label>
                    <select class="form-select" name="region_id" id="region_id">
                        @foreach ($countries as $key=>$country)
                            <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    <div id="region_id" class="form-text">Contoh: Indonesia</div>
                    @error('region_id')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                  </div>
              </div>

              <div class="form-password mb-2">
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
              </div>

              <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="term_cons" name="term_cons" required>
                <label class="form-check-label" for="exampleCheck1">Saya telah membaca <span>Syarat</span> dan <span>Ketentuan</span> PROJECT-IN</label>
              </div>

              <button type="submit" class="button-submit">Daftar</button>
            </form>

            <h6 class="text-center pb-5">Sudah memiliki Akun Freelancer? <a href="/login">Masuk</a></h6>
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
