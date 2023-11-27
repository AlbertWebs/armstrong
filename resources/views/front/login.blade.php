@extends('front.master-pages')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">

        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Log In & Register Start -->
    <div class="login-register-section section-padding-2">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-md-12" style="margin:0 auto">
                    <div class="col-md-6" style="margin:0 auto">
                        <!-- Log In & Register Box Start -->
                        <div class="login-register">
                            <h3 class="login-register__title">Log In</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="login-register__form">
                                    <!-- Single Form Start -->
                                    <div class="single-form">

                                        <input id="email" type="email" class="single-form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        {{-- <input class="single-form__input" type="password" placeholder="Password *" /> --}}
                                        <input id="password" type="password" class="form-control single-form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">

                                        <input class="single-form__input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="single-form__label checkbox-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                        <p class="lost-password">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link lost-password" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </p>


                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                    <hr>
                                    <p class="lost-passwords">
                                        New Here?<a href="{{url('/')}}/register">Register</a>
                                    </p>
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
