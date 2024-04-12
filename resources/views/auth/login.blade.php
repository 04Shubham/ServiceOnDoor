{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DoorIn - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('client/img/favicon.ico') }}" rel="icon">

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
    <div>
        <!-- Navbar & Hero Start -->

        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <h1 class="m-0">DoorIn</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="project.html" class="nav-item nav-link">Project</a>

                    <a href="contact.html" class="nav-item nav-link"></a>
                </div>
                <a href="{{ route('register') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Sign Up</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary hero-header1">
            <div class="container px-5">
                <div class="row align-items-end">
                    <div class="container-fluid h-custom">

                        Login 
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-9 col-lg-6 col-xl-5">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                    class="img-fluid" alt="Sample image">
                            </div>

                            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                                        <h2 class="text-white text-[20px] mb-5 mt-5 align-items-center">Sign In</h2>

                                    </div>

                                    <!-- Email input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Enter a valid email address" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Password input -->
                                    <div data-mdb-input-init class="form-outline mb-3">
                                        <input type="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Enter password" />
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
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="remember" {{ old('remember') ? 'checked' : '' }} />
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
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-success btn-lg"
                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>

                                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                                href="{{ route('register') }}" class="link-danger">Register</a>
                                        </p>

                                    </div>
                                    <div class="divider d-flex align-items-center justify-content-center my-4">
                                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                    </div>
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary btn-floating mx-1">
                                            <i class="fab fa-google"></i>
                                        </button>
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
                                    </div>

                                </form>
                            </div>

                        </div>
                        Login end 

                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar & Hero End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('client/img/portfolio-1.jpg') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('client/img/portfolio-2.jpg') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('client/img/portfolio-3.jpg') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('client/img/portfolio-4.jpg') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('client/img/portfolio-5.jpg') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('client/img/portfolio-6.jpg') }}"
                                    alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                            non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

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

</html> --}}


@extends('layouts.client.master')
@section('content')
    <div class="container-fluid bg-primary hero-header text-white">
        <div class="container-fluid px-lg-5">
            {{-- Login  --}}
            <div class="row d-flex justify-content-center align-items-center h-100 mt-10px">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-10px ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div
                            class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center m-10">
                            <h2 class=" text-[20px] mb-5 mt-5 align-items-center text-white">Sign In</h2>

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
                            <input type="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Enter password" />
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
                                <input class="form-check-input me-2" type="checkbox" value="" id="remember"
                                    {{ old('remember') ? 'checked' : '' }} />
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
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>

                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('register') }}" class="link-danger">Register</a>
                            </p>

                        </div>
                        <div class="divider d-flex align-items-center justify-content-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
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
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- Login end  --}}
@endsection
