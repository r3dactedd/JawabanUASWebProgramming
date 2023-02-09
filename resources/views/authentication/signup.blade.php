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
            <a class="navbar-brand">Amazing E-Grocery</a>
            <form class="form-inline">
                <a href="/register">
                    <button type="button" class="btn btn-warning my-2 my-sm-0">
                        <i class="bi bi-person-plus"></i> Register</button>
                    </a>
                    <a href="/login">
                        <button type="button" class="btn btn-outline-warning my-2 my-sm-0">
                            <i class="bi bi-box-arrow-in-right"></i> Login</button>
                    </a>
            </form>
          </nav>
    </header>

        <div class="row justify-content-center">
            <div class="col-lg-5">
              <main class="form-registration">
                <h1 class="h3 fw-normal text-center" style="padding-top:120px">{{ __('lang.register') }}</h1>
                <p class="mb-3 text-center">{{ __('lang.registerdesc') }}</p>
                <div class="text-center" style="margin-bottom:10px">
                    <a class="btn btn-outline-warning" href="/locale/en">en</a>
                    <a class="btn btn-outline-warning" href="/locale/id">id</a>
                </div>

                <form action="/register" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-floating mb-3">
                    <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" style=" border-radius:10px;" placeholder="First Name" required value="{{ old('firstname') }}" autofocus>
                    <label for="firstname">{{ __('lang.firstname') }}</label>
                    @error('firstname')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" style=" border-radius:10px;" placeholder="lastname" required value="{{ old('lastname') }}" autofocus>
                    <label for="lastname">{{ __('lang.lastname') }}</label>
                    @error('lastname')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" style="border-radius:10px;" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <select class="form-select" id="role_id" name="role_id" required focus>
                        <option value="1"  selected>Admin</option>
                        <option value="2"  selected>Member</option>
                        <option value="Select Role" disabled selected>{{ __('lang.selectrole') }}</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>

                  <label for="gender">{{ __('lang.gender') }}</label>
                  <div class="form-floating mb-3">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender_id" id="gender_id" value="1">
                        <label class="form-check-label" for="inlineRadio1">{{ __('lang.gendermale') }}</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender_id" id="gender_id" value="2">
                        <label class="form-check-label" for="inlineRadio2">{{ __('lang.genderfemale') }}</label>
                      </div>
                      @error('gender')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>

                  <label for="profile_img">{{ __('lang.profileimg') }}</label>
            <div class="form-floating mb-3">
                <input id="profile_img" class="form-control @error('profile_img') is-invalid @enderror" type="file" name="profile_img">

                @error('profile_img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" style="border-radius:10px;" placeholder="Password" required>
                    <label for="password">{{ __('lang.password') }}</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                      <input type="password" name="password_confirmation" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" style="border-radius:10px;" placeholder="Enter Your Confirm Password" required>
                      <label for="password">{{ __('lang.confirmpass') }}</label>
                      @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                  <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Register</button>

                  </form>
                <small class="d-block text-center mt-3">Already have an account? <a href="/login" style="color:rgb(207, 170, 6); padding-bottom:150px">Login Now!</a></small>
              </main>
            </div>
          </div>
</body>
</html>


