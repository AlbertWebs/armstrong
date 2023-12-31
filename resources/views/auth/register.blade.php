@extends('front.master-client')

@section('content')

<main>
<br>

    <!-- Log In & Register Start -->
    <div class="login-register-section section-padding-2">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-md-12" style="margin:0 auto">
                    <div class="col-md-6" style="margin:0 auto">
                        <!-- Log In & Register Box Start -->
                        <div class="login-register">
                            <h3 class="login-register__title">Sign Up</h3>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="login-register__form">
                                     <!-- Single Form Start -->
                                     <div class="single-form">

                                        <input placeholder="Full Name" id="name" type="text" class="single-form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->

                                     <!-- Single Form Start -->
                                     <div class="single-form">

                                        <input placeholder="Email Address" id="email" type="email" class="single-form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->


                                    <!-- Single Form Start -->
                                    <div class="single-form">

                                        <input placeholder="Mobile" id="email" type="text" class="single-form__input @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->

                                      <!-- Single Form Start -->
                                      <div class="single-form">

                                        <input placeholder="Delivery Address" id="address" type="text" class="single-form__input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->


                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        {{-- <input class="single-form__input" type="password" placeholder="Password *" /> --}}
                                        <input placeholder="password" id="password" type="password" class="form-control single-form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        {{-- <input class="single-form__input" type="password" placeholder="Password *" /> --}}
                                        <input placeholder="{{ __('Confirm Password') }}" id="password" type="password" class="form-control single-form__input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->






                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                    <hr>
                                    <p class="lost-passwords">
                                        Already Have an Account?<a href="{{url('/')}}/login">Login</a>
                                    </p>
                                </div>
                            </form>


                        </div>
                        <!-- Log In & Register Box End -->
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <!-- Log In & Register Box Start -->
                    <div class="login-register">
                        <h3 class="login-register__title">Register</h3>

                        <form action="#">
                            <div class="login-register__form">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input class="single-form__input" type="email" placeholder="Email address *" />
                                </div>
                                <!-- Single Form Start -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input class="single-form__input" type="password" placeholder="Password *" />
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
                                    <button class="single-form__btn btn">
                                        Register
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
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Log In & Register End -->


</main>
@endsection
