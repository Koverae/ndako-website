@extends('layouts.error')

@section('title', __('Forbidden'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">403 | Unlock the Possibilities</h1>
            <p class="mt-3 fs-5">
                Access denied! You don’t have permission to view this page. If you believe this is an error, please contact us at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
                {{ $exception->getMessage() ?: '' }}
            </p>
            <a href="{{ route('home') }}" class="btn k-primary p-2 fw-bold">Go back home</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/403.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
