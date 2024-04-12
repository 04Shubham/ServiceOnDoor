@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



 {{-- Login  --}}
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
{{-- Login end  --}}