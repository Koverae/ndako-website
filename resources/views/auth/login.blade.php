@extends('layouts.app')

@section('page_title', __('Sign in to your Koverae Space'))

@section('styles')
<style>
       
    body{
        font-size: 14px;
        line-height: 22px;
        text-decoration: none solid rgb(52, 58, 64);
        word-spacing: 0px;
        background-attachment: fixed;
        background-size: cover;
        background-image: url('/assets/images/background/bg-1.jpg');
        background-repeat: no-repeat;
        height: 100%;
        /* width: auto; */
        /* min-height: 642px; */
        min-width: auto;
    }

</style>
@endsection

@section('content')

<section id="hero" class="justify-content-lg-center d-flex" style="margin: 15px 0 0 0;">
    <div class="pb-4 shadow k_website_login card">
        <img class="mx-auto k_logo" src="{{ asset('assets/images/logo/logo-black.png') }}" />
        <div class="card-body">
            <div class="text-center k-alert alert-info">
                <p>
                    Access and manage your instances from this Koverae account.
                </p>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}" class="k_login_form">
                {{-- @csrf --}}

                <div class="mb-2 field-login">
                    <label for="email" class="fom-label">
                        Email Address
                    </label>
                    <input name="email" required id="email" class="form-control" type="email" style="width: 318px; min-width: auto;" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <div class="alert alert-info" style="display: none;"></div>
                </div>

                <div class="py-2 col-12 field-password koverae_password_revear">
                    <label for="password" class="fom-label">
                        Password
                    </label>
                    <input class="form-control" name="password" type="password" id="password" placeholder="Your password"
                        required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mb-2">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <button class="btn b-primary login text-uppercase" type="submit">
                    Konnect In
                </button>
                <div class="gap-1 mt-2 mb-3 text-center k_login_buttons">

                    <div class="links-container">
                        @if(Route::has('register'))
                        <a href="{{ route('register') }}" class="login-link text-primary">Don't have an account?</a>
                        @endif
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="reset-link text-primary">Reset Password</a>
                        @endif
                            
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
