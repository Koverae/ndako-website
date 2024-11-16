@extends('layouts.error')

@section('title', __('Too Many Requests'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">429 | Pause, and Take a Breath</h1>
            <p class="mt-3 fs-5">Whoa, slow down! You’ve made too many requests in a short time. Please try again later. If you need help, reach out at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
            </p>
            <a href="{{ route('home') }}" class="btn k-primary p-2 fw-bold">Go back home</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/429.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
