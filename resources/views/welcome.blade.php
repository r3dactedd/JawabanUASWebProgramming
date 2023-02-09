<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Welcome</title>

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" style="padding:20px;">
        <a class="navbar-brand text-dark">Amazing E-Grocery</a>
        <ul class="navbar-nav ms-auto">
            <form class="form-inline">
                <a href="/login">
                    <button type="button" class="btn btn-warning my-2 my-sm-0">
                        <i class="bi bi-box-arrow-in-right"></i> {{ __('lang.loginbtn') }}</button>
                    </a>
        </form>
        </ul>

      </nav>
</header>

{{-- <div class="flex justify-end pt-8 sm:justify-start sm:pt-0">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>
        @else
            <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">
                <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div> --}}

<div class="w-full bg-cover bg-center" style="height:70rem; background-image: url(https://img.freepik.com/free-photo/top-view-delicious-groceries-paper-bag_23-2149139455.jpg?w=2000); background-repeat:no-repeat">
    <div class="flex items-center justify-content-center" style="padding-top:200px">
            <div class="text-center">
                <a class="btn btn-warning" href="/locale/en">en</a>
                <a class="btn btn-warning" href="/locale/id">id</a>
                <h1 class="py-5 text-white text-2xl font-semibold  md:text-3xl">{{ __('lang.welcometext1') }} <span style="color:yellow">{{ __('Amazing E-Grocery') }}</span></h1>
                <p class="text-white" style="font-size:20px">{{ __('lang.welcometext2') }}</p>
                <br>
                <a href="/register">
                    <button type="button" class="btn btn-outline-warning my-2 my-sm-0" style="margin-right:padding-top:120px; width:200px; height:50px;">
                        <i class="bi bi-person-plus"></i> {{ __('lang.registerbtn') }}</button>
                    </a>
            </div>
        </div>
</div>




    <div class="bg-dark text-white sticky-bottom">
        <footer class="py-1 mt-4">
            <h2 class="text-center my-2">Amazing E-Grocery</h2>
            <p class="text-center my-2"></p>

            <ul class="nav justify-content-center d-flex my-2">
                <li class="mx-4"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
                <li class="mx-4"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
                <li class="mx-4"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="mx-4"><a class="text-muted" href="#"><i class="bi bi-youtube"></i></a></li>
            </ul>

            <ul class="nav justify-content-center my-2">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy Policy</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Terms of Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
            </ul>

          <p class="text-center text-muted" style="padding: 0;">Copyright © 2023 Amazing E-Grocery All Rights Reserved</p>

        </footer>
      </div>

</body>
</html>
