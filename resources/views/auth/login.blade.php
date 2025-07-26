@extends('website.layouts.app')
@section('content')
    <section class="sec-cart login-page-sec">
        <div class="width-container">
            <div class="login-page">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-lg-12 col-xl-9 login-page-in">
                        <form method="POST" action="{{ route('login') }}" id="Login">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 left">
                                    <div class="left-in">
                                        <h3>Hello, Welcome!</h3>
                                        <p>Aivri ecommerce products </p>
                                    </div>
                                </div>

                                <div class="col-md-6 right">
                                    <div class="profile-login">
                                        <h2>{{ __('auth.login_heading') }}</h2>

                                        <div class="form-group">
                                            <label for="mobile">{{ __('auth.mobile') }}</label>
                                            <input type="number" class="form-control" id="mobile" name="mobile"
                                                value="{{ old('mobile') }}" placeholder="Enter Your {{ __('auth.mobile') }}"
                                                autofocus>
                                            <i class="fa-solid fa-phone input-icon"></i>
                                            <x-input-error :messages="$errors->get('mobile')" class="danger" />
                                        </div>

                                        <div class="form-group">
                                            <label for="password">{{ __('auth.password') }}</label>
                                            <input type="password" class="form-control" value="{{ old('password') }}"
                                                placeholder="Enter Your {{ __('auth.password') }}" id="password"
                                                name="password">
                                            <i class="fas fa-lock input-icon"></i>
                                            <x-input-error :messages="$errors->get('password')" class="danger" />
                                        </div>

                                        <div class="profile-login-inr">
                                            <div class="otp-field" id="otpField">
                                                <input type="text" maxlength="1" />
                                                <input type="text" maxlength="1" />
                                                <input class="space" type="text" maxlength="1" />
                                                <input type="text" maxlength="1" />
                                                <input type="text" maxlength="1" />
                                                <input type="text" maxlength="1" />
                                            </div>
                                        </div>

                                        <div class="prof-login-out">
                                            <div class="main-btn-out">
                                                <button type="submit"
                                                    class="btn main-btn">{{ __('auth.sign_in') }}</button>
                                                <button type="button" class="btn second-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalToggle3">{{ __('auth.sign_in_otp') }}</button>
                                            </div>
                                        </div>

                                        <div class="dont-account">
                                            <div class="already-account">
                                                <h6>Don’t have an account yet? <br>
                                                    <a href="{{ route('register') }}">
                                                        <button class="btn btn-have-account"
                                                            type="button">{{ __('auth.sign_up') }}</button>
                                                    </a>
                                                    for free
                                                </h6>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="forgot-password">
                                                    <a
                                                        href="{{ route('password.request') }}">{{ __('auth.forgot_password') }}</a>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="social-divider">
                                            <span>or continue with</span>
                                        </div>

                                        <div class="social-login">
                                            <a href="#" class="social-btn google">
                                                <i class="fab fa-google"></i>
                                            </a>
                                            <a href="#" class="social-btn facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" class="social-btn twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
