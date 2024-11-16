@extends('layouts.error')

@section('title', __('Server Error'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">500 | Progress, Even Through Setbacks</h1>
            <p class="mt-3 fs-5">Something went wrong on our end. We're working to fix it. If the problem persists, let us know at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
            </p>
            <a href="{{ route('home') }}" class="btn k-primary p-2 fw-bold">Go back home</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/500.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
