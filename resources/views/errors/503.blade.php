<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Koverae Ltd">
    <meta name="description" content="Ndako is an all-in-one hospitality platform designed for property owners, managers, and tenants. Simplify property listings, financial tracking, and guest interactions, everything you need to streamline property management." />
    <meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico')}}">
    <title>Ndako - Property Management Made Easy 🔨🚧🧱</title>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{ asset('assets/images/logo/logo-black.png')}}"
        }
    </script>
    <!-- Open Graph -->
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Ndako - Property Management System">
    <meta property="og:description" content="All-in-one hospitality platform" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.ndako.koverae.com">
    <!-- Open Graph -->

    <!-- Google tag (gtag.js) -->
    <!-- Google tag End (gtag.js) -->

    <!-- Meta Pixel Code -->
    <!-- End Meta Pixel Code -->

    <!-- Caveat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css?'.time())}}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    @livewireStyles
    @livewireScripts

    <style>
        
        .under-dev{
            padding: 50px 32px 50px 32px;
        }

        .under-dev .k-primary {
            background-color: #026469;
            outline: none;
            color: white;
        }
        .under-dev .k-primary:hover{
            background-color: #034f53;
            color: white;
        }
        .k-input{
            width: 300px;
            min-width: auto;
            height: auto;
            min-height: 20px;
            outline: #026469;
        }
        .k-input:focus{
            outline: none;
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <main class="under-dev">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('assets/images/logo/logo-black.png')}}" height="50px" alt="Koverae Logo">

                <h1 class="mt-4 caveat">Ndako - Property Management Made Easy</h1>
                <p class="mt-3 fs-5">We're building something exciting! Ndako is a powerful platform designed to simplify property management. Whether you're managing a single property or an entire portfolio, we’ve got you covered. Stay tuned for our upcoming launch, and be the first to experience the future of property management!</p>
                <p class="mt-1 fs-5">Be the first to know when we launch. Sign up below with your email to get exclusive updates and early access!</p>
                <livewire:early-bird />
                <!-- Session Status -->
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="mt-1 d-lg-flex gap-2" method="post" action="{{ route('early') }}">
                    @csrf
                    <input type="text" name="name" class="form-control k-input mb-lg-0 mb-2" placeholder="Enter your name" required>
                    <input type="email" name="email" class="form-control k-input mb-lg-0 mb-2" placeholder="Enter your email" required>
                    <button class="btn k-primary p-2 fw-bold ml-2" type="submit">Sign Up for Updates</button>
                </form> --}}
                

            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('assets/images/errors/503.svg')}}"style="object-fit: cover; width: 100%;" alt="">
            </div>
        </div>
    </main>


    <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>