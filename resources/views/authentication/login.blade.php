<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

{{-- Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

{{-- My Style --}}
 <link rel="stylesheet" href="sass/components.scss">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light" style="padding:20px">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <a href="/register">
                    <button type="button" class="btn btn-warning my-2 my-sm-0">
                        <i class="bi bi-person-plus"></i> {{ __('lang.registerbtn') }}</button>
                    </a>
                    <a href="/login">
                        <button type="button" class="btn btn-outline-warning my-2 my-sm-0">
                            <i class="bi bi-box-arrow-in-right"></i> {{ __('lang.loginbtn') }}</button>
                    </a>
            </form>
          </nav>
    </header>
    <div class="row justify-content-center" style="margin-top: 150px; margin-bottom:150px">
        <div class="col-md-4">
            {{-- pesan register success --}}
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- pesan login salah --}}
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

          <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">{{ __('lang.formtitle') }} <span style="color:rgb(255, 200, 0)">Amazing E-Grocery</span></h1>
            <p class="mb-3 fw-normal text-center">{{ __('lang.logindesc') }}</p>
            <div class="text-center" style="margin-bottom:10px">
                <a class="btn btn-outline-warning" href="/locale/en">en</a>
                <a class="btn btn-outline-warning" href="/locale/id">id</a>
            </div>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" style="border-radius:10px; border-color:black;" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">{{ __('lang.emailaddress') }}</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control" style="border-radius:10px; border-color:black;" id="password" placeholder="Password" required>
                <label for="password">{{ __('lang.password') }}</label>
              </div>

              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label" for="remember">
                    {{ __('lang.rememberme') }}
                </label>
              </div>

              <button class="w-100 btn btn-lg btn-warning" type="submit">
                {{ __('lang.loginbtn') }} <i class="bi bi-box-arrow-in-right"></i> </button>

            </form>

            <small class="d-block text-center mt-3">{{ __('lang.donthaveaccount') }} <a href="/register" style="color:rgb(255, 200, 0)">{{ __('lang.registernow') }}</a></small>
          </main>

        </div>
    </div>
</body>
</html>


