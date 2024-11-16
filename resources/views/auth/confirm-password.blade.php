@extends('layouts.app')

@section('page_title', 'Forgot Password')

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
<section id="hero" class="justify-content-lg-center d-flex" style="margin: 20px 0 0 0;">
    <div class="shadow k_website_login card">
        <img class="mx-auto k_logo" src="{{ asset('assets/images/logo/logo-black.png') }}" />
        <div class="card-body">
            <div class="text-center k-alert alert-info">
                <p>
                    {{ __('This is a restricted area of ​​the application. Please confirm your password before continuing.') }}
                </p>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-3 field-login">
                    <label for="password" class="fom-label">
                        {{ __('Password') }}
                    </label>
                    <input name="password" required autocomplete="current-password" class="form-control" type="password" id="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <button class="btn b-primary w-100 text-uppercase" type="submit">
                    {{ __('Confirm') }}
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
