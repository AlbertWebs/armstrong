@extends('front.master-pages')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">
                    Sign Up
                </h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span> Sign Up</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Log In & Register Start -->
    <div class="login-register-section section-padding-2">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-md-12" style="margin:0 auto">
                    <div class="col-md-6">
                        <!-- Log In & Register Box Start -->
                        <div class="login-register">
                            <h3 class="login-register__title">Register</h3>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="login-register__form">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        {{-- <input class="single-form__input" type="email" placeholder="Email address *" /> --}}
                                        <input id="name" type="text" class="form-control single-form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">

                                        <input id="email" type="email" class="form-control single-form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="single-form">

                                        <input id="password" type="password" class="form-control single-form__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <p class="privacy-policy-text">
                                            Your personal data will be used
                                            to support your experience
                                            throughout this website, to
                                            manage access to your account,
                                            and for other purposes described
                                            in our
                                            <a href="#">privacy policy</a>.
                                        </p>
                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                </div>
                            </form>

                            <ul class="login-register__social">
                                <li>
                                    <a class="social-facebook" href="#">
                                        <span class="social-icon">
                                                <img
                                                    src="{{asset('theme/assets/images/facebook.svg')}}"
                                                    alt="Facebook"
                                                />
                                            </span>
                                        <span class="social-text"
                                                >Login with Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="social-google" href="#">
                                        <span class="social-icon">
                                                <img
                                                    src="{{asset('theme/assets/images/google.svg')}}"
                                                    alt="Facebook"
                                                />
                                            </span>
                                        <span class="social-text"
                                                >Login with Google</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Log In & Register Box End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Log In & Register End -->


</main>
@endsection
