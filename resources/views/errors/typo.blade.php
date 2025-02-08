@extends('layouts.app')

@section('page_title', 'Typo')

@section('styles')
 <style>
    body{
        background-color: #F3F3F3;
    }
    .site-nav{
        background-color: #F3F3F3;
    }
    
 </style>
@endsection

@section('content')
    <section class="k_typo_page h-100 d-flex" id="hero" style="margin-top: 0px;" data-image="{{ asset('assets/images/people/typo_bg_0.jpg') }}">
        <div class="container d-flex align-items-md-center">
            <div class="k_typo_page_content mt-sm-0 mb-md-5 pb-md-5">
                <div class="text-center-xs">
                    <h1 class="mt-0 display-1 caveat ">
                        Oooop!!
                    </h1>
                    <h4 class="mb-4">
                        <small>We can't find</small> <br /> <b>{{ $host }}</b>
                    </h4>
                    <p class="mb-2">
                        Possible causes
                    </p>
                    <ul class="ps-4">
                        <li class="mb-3">
                            <b>Wrong</b> URL
                            <br />
                            <b class="small text-muted text-secondary">Please double check the address.</b>
                        </li>
                        <li class="mb-3">
                            <b>Expired</b> Domain
                            <br />
                            <b class="small text-muted">If you are the owner, get in touch with our <a href="" class="text-primary font-weight-bold">Support Team.</a></b>
                        </li>
                        <li class="mb-3">
                            This domain doesn't exist (yet) 
                            <a href="" class="mt-2 btn b-primary"> <b>Register it now!</b>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-4 hr bg-black-25">
                    <h4 class="pt-3 d-flex font-weight-bold" style="font-size: 19px;">Want to know more about <img src="{{ asset('assets/images/logo/logo-text-black.png') }}" height="30px" alt=""> ? </h4>
                    <p class="small">
                        Ndako provides everything you need to manage your properties in one place: fully integrated tools that simplify operations, 
                        improve efficiency, and deliver exceptional experiences for tenants and guests.
                    </p>
                    <a href="https://www.ndako.koverae.com" class="btn b-primary me-2"><b>Our website</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/color-thief@2.3.0/dist/color-thief.min.js"></script>
<script>
    // Wait for the window and the document to load
    window.onload = function() {
        // Ensure that ColorThief is globally accessible
        const colorThief = new ColorThief();

        const img = new Image();
        img.crossOrigin = 'Anonymous'; // To handle CORS issues

        // Get the image URL from the data attribute
        const imageUrl = document.getElementById('k_typo_page').getAttribute('data-image');
        img.src = imageUrl;

        img.addEventListener('load', function() {
            // Get the dominant color of the image
            const dominantColor = colorThief.getColor(img);

            // Convert the color to a CSS format (rgb(r, g, b))
            const backgroundColor = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

            // Apply the background color to the section
            document.getElementById('k_typo_page').style.backgroundColor = backgroundColor;
        });
    };
</script>

@endsection
