<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DoorIn - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('client/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('client/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-2 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            <h1>DoorIn</h1>
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div class="collapse navbar-collapse" id="navbarCollapse>
            @guest
            <div class="navbar-nav
            mx-auto py-0">
            <a href="{{ route('login') }}" class="btn rounded-pill px-4 ms-3 d-none d-lg-block">Get
                Started</a>
            {{-- <a href="{{ route('login') }}" class="nav-item nav-link">Sign In</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">Sign Up</a> --}}

        </div>
    @else
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    @endguest
</div>
<!-- Right -->
</div>
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                    <h2class="lead fw-normal mb-5 mt-5 align-items-center">Sign In</h2class=>

                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Enter a valid email address" name="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus />
                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                    placeholder="Enter password" />
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
                        
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                            class="link-danger">Register</a></p>

                </div>
                <div class="divider d-flex flex-col align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    <div>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-linkedin-in"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('client/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('client/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('client/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('client/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('client/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('client/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('client/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('client/js/main.js') }}"></script>
</body>

</html>
