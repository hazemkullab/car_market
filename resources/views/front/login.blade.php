@extends('front.master')
@section('title','Homepage | '.env('APP_NAME'))
@section('content')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>{{ __('web.Login') }}</h1>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">{{ __('web.Home') }}</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            {{ __('web.Login') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<main class="site-main page-wrapper woocommerce single single-product">
    <section class="space-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="woocommerce-notices-wrapper"></div>
                    <h2 class="font-weight-bold mb-4">{{ __('web.Login') }}</h2>
                    <form class="woocommerce-form woocommerce-form-login login" method="post" action="{{ route('login') }}" >
                        @csrf
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">{{ __('web.Email Address') }}&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                name="email" id="username" autocomplete="username" value="">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">{{ __('web.Password ') }}&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                type="password" name="password" id="password" autocomplete="current-password">
                        </p>
                        <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit"
                                name="login" value="Log in">{{ __('web.Login') }}</button>
                            <label
                                class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                    name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>{{ __('web.Remember me') }}</span>
                            </label>
                        </p>
                        <p class="woocommerce-LostPassword lost_password">
                            <a href="#">{{ __('web.Lost your password?') }}</a>
                        </p>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2 class="font-weight-bold mb-4">{{ __('web.Register') }}</h2>
                    {{-- <form method="post" class="woocommerce-form woocommerce-form-register register" action="{{ route('register') }}">

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>User Name&nbsp;<span class="required">*</span></label>
                            <input type="username"
                                class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                name="email" id="username" autocomplete="user-name" value="">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Email address&nbsp;<span class="required">*</span></label>
                            <input type="email"
                                class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email"
                                id="email" autocomplete="email" value="">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Password&nbsp;<span class="required">*</span></label>
                            <input type="password"
                                class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                name="password" id="password" autocomplete="password" value="">
                        </p>
                        <p class="woocommerce-FormRow form-row">
                            <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
                                value="b1c661ab82"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-Button button" name="register"
                                value="Register">Register</button>
                        </p>
                    </form> --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('web.Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('web.Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('web.Password ') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('web.password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('web.Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="woocommerce-Button button" name="register"
                                value="Register">{{ __('web.Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->
</main>

@stop
