@extends('website.layouts.app')
@section('content')
    <section class="sec-cart login-page-sec">
        <div class="width-container">

            <div class="login-page">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-lg-12 col-xl-9 login-page-in">
                        <form method="POST" action="{{ route('register') }}">
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
                                        <h2>{{ __('auth.register_heading') }} </h2>

                                        <div class="form-group">
                                            <label for="name">{{ __('auth.name') }}</label>
                                            <input type="text" class="form-control" id="name"
                                                value="{{ old('name') }}" placeholder="Enter your {{ __('auth.name') }}"
                                                name="name">
                                            <i class="fa-solid fa-user input-icon"></i>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label for="email">{{ __('auth.email') }}</label>
                                            <input type="text" class="form-control" id="email"
                                                value="{{ old('email') }}" placeholder="Enter your {{ __('auth.email') }}"
                                                name="email">
                                            <i class="fa-solid fa-envelope input-icon"></i>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">{{ __('auth.mobile') }}</label>
                                            <input type="number" class="form-control" id="mobile"
                                                value="{{ old('mobile') }}"
                                                placeholder="Enter Your  {{ __('auth.mobile') }}" name="mobile">
                                            <i class="fa-solid fa-phone input-icon"></i>
                                            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label for="password">{{ __('auth.password') }}</label>
                                            <input type="password" class="form-control"
                                                placeholder="Enter Your {{ __('auth.password') }}" name="password">
                                            <i class="fas fa-lock input-icon"></i>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label
                                                for="password_confirmation">{{ __('auth.password_confirmation') }}</label>
                                            <input type="password" class="form-control"
                                                placeholder="Enter Your {{ __('auth.password_confirmation') }}"
                                                name="password_confirmation">
                                            <i class="fas fa-lock input-icon"></i>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="prof-login-out">
                                            <div class="main-btn-out">
                                                <button type="submit" class="btn main-btn">
                                                    Register
                                                </button>
                                            </div>
                                        </div>

                                        <div class="dont-account" style="margin-top: 10px">
                                            <div class="already-account">
                                                <h6>Already registered? <br>
                                                    <a href="{{ route('login') }}">
                                                        <button class="btn btn-have-account" type="button">Sign In</button>
                                                    </a>
                                                </h6>
                                            </div>
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
