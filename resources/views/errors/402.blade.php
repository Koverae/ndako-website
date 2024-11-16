@extends('layouts.error')

@section('title', __('Payment Required'))

@section('content')
<section class="under-dev" id="hero">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="mt-4 caveat">402 | Invest in the Future</h1>
            <p class="mt-3 fs-5">Oops! It seems there’s an issue with your payment. Please update your payment details or contact us at: <a class="text-primary text-decoration-none" href="mailto:contact@ndako.koverae.com">contact@ndako.koverae.com</a>
            </p>
            <a href="{{ route('home') }}" class="btn k-primary p-2 fw-bold">Try again</a>
    
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/images/errors/402.svg') }}"style="object-fit: cover; width: 100%;" alt="">
        </div>
    </div>
</section>
@endsection
