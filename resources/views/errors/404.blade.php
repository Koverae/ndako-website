@extends('layouts.error')

@section('title', __('Page Not Found'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">We couldn't find the page you're looking for!</h1>
            <p class="mt-3 fs-5"><b>Don't panic</b>. If you think it's our mistake,
                please send us a message at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
            </p>
            <a href="{{ route('home') }}" class="btn k-primary p-2 fw-bold">Go back home</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/404.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
