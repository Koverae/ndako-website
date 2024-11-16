@extends('layouts.error')

@section('title', __('Page Expired'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">419 | Stay Fresh, Stay Connected</h1>
            <p class="mt-3 fs-5">It seems the page you were working on has expired. Please refresh the page and try again. If the issue persists, feel free to reach out to us at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
            </p>
            <a href="{{ route('home') }}" class="btn k-primary p-2 fw-bold">Refresh the page</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/419.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
