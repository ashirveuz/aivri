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
                                <input type="hidden" name="auth_method" value="{{ old('auth_method', 'password') }}"
                                    id="auth_method" />
                                <div class="col-md-6 right">
                                    <div class="profile-login">
                                        <h2>{{ __('auth.login_heading') }}</h2>

                                        <div class="form-group">
                                            <label for="mobile">{{ __('auth.mobile') }}</label>
                                            <input type="number" class="form-control" id="mobile" name="mobile"
                                                value="{{ old('mobile') }}" placeholder="Enter Your {{ __('auth.mobile') }}"
                                                autofocus>
                                            <i class="fa-solid fa-phone input-icon"></i>
                                            <x-input-error :messages="$errors->get('mobile')" :addHiddenField="true" :hiddenFieldId="'mobileErrorSec'"
                                                class="danger" />
                                        </div>

                                        <div class="form-group" id="passwordSection"
                                            style="{{ old('auth_method', 'password') == 'otp' ? 'display:none' : '' }}">
                                            <label for="password">{{ __('auth.password') }}</label>
                                            <input type="password" class="form-control" value="{{ old('password') }}"
                                                placeholder="Enter Your {{ __('auth.password') }}" id="password"
                                                name="password">
                                            <i class="fas fa-lock input-icon"></i>
                                            <x-input-error :messages="$errors->get('password')" class="danger" />
                                        </div>

                                        <div class="profile-login-inr" id="otpSection"
                                            style="{{ old('auth_method', 'password') == 'password' ? 'display:none' : '' }}">
                                            <div class="otp-field" id="otpBtnDiv">
                                                <button type="button" onclick="validateNumberAndSendOtp(this)"
                                                    class="btn second-btn">{{ __('auth.send_otp') }}</button>
                                            </div>
                                            <div class="otp-field" id="otpFieldDiv" style="display: none">
                                                <input name="otp[]" type="text" maxlength="1"
                                                    onkeydown="moveOtpFieldFocus(event, this)" id="otpField1" />
                                                <input name="otp[]" type="text" maxlength="1"
                                                    onkeydown="moveOtpFieldFocus(event, this)" id="otpField2" />
                                                <input name="otp[]" class="space" type="text" maxlength="1"
                                                    onkeydown="moveOtpFieldFocus(event, this)" id="otpField3" />
                                                <input name="otp[]" type="text" maxlength="1"
                                                    onkeydown="moveOtpFieldFocus(event, this)" id="otpField4" />
                                                <input name="otp[]" type="text" maxlength="1"
                                                    onkeydown="moveOtpFieldFocus(event, this)" id="otpField5" />
                                                <input name="otp[]" type="text" maxlength="1"
                                                    onkeydown="moveOtpFieldFocus(event, this)" id="otpField6" />
                                            </div>
                                            <x-input-error :messages="$errors->get('otp.6')" class="danger" />
                                        </div>

                                        <div class="prof-login-out">
                                            <div class="main-btn-out">
                                                <button type="submit"
                                                    class="btn main-btn">{{ __('auth.sign_in') }}</button>
                                                <button type="button" onclick="toggleOtpSection('otp')" id="otpEnableBtn"
                                                    class="btn second-btn"
                                                    style="{{ old('auth_method', 'password') == 'otp' ? 'display:none' : '' }}">{{ __('auth.sign_in_otp') }}</button>
                                                <button type="button" onclick="toggleOtpSection('password')"
                                                    id="passwordEnableBtn" class="btn second-btn"
                                                    style="{{ old('auth_method', 'password') == 'password' ? 'display:none' : '' }}">{{ __('auth.sign_in_password') }}</button>
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
@section('scripts')
    <script src="{{ asset('assets/js/auth.js') }}"></script>
    <script>
        const csrfToken = "{{ csrf_token() }}";
    </script>
@endsection
