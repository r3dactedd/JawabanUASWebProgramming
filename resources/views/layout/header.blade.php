
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class= "navbar-brand">Amazing E-Grocery</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 320px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">{{ __('lang.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">{{ __('lang.cart') }}</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">{{ __('lang.profile') }}</a>
                    </li>
                    @if (Auth::user()->role_id == 1)
                    <a class="nav-link" href="/management">
                        {{ __('lang.accountmanagement') }}</a>
                @endif
            </ul>

        </div>

        <ul class="navbar-nav ms-auto">
            @auth
            {{--  kalo udah login tampilin dropdown --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->firstname }} <span>{{ auth()->user()->lastname }}</span>

                  {{-- <i class="bi bi-person-circle"> --}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                      <form action="/logout" method="post">
                            @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                  </li>

                </ul>
              </li>
              @endauth
        </ul>

    </div>
  </nav>
