@extends('layouts.error')

@section('title', __('Unauthorized'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">401 | Step Into the Journey</h1>
            <p class="mt-3 fs-5">You're not authenticated to access this page. Please log in and try again. If you need assistance, contact us at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
            </p>
            <a href="{{ route('login') }}" class="btn k-primary p-2 fw-bold">Sign In</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/401.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
