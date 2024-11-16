<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Koverae">
    <meta name="description" content="Ndako is an all-in-one hospitality platform designed for property owners, managers, and tenants. Simplify property listings, financial tracking, and guest interactions, everything you need to streamline property management." />
    <meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.ico')}}">
    <title>@yield('title') - Ndako</title>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "assets/images/logo/logo-black.png"
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ1L2Y7QS6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HJ1L2Y7QS6');
    </script>
    <!-- Google tag End (gtag.js) -->

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '291287213552434');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=291287213552434&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    
    <!-- Caveat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/style.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css?'.time() )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?'.time())}}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

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
    </style>
</head>
<body class="overflow-x-hidden">
    <main class="container">
        <!-- Navbar -->
        <nav class="site-nav">
            <!-- Logo -->
            <div class="logo float-start">
                <a href="{{ route('home') }}" class="text-white">
                    <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="Ndako Logo">
                </a>
            </div>
            <div class="row align-items-center">
                <div class="text-center col-12 col-sm-12 col-lg-12 site-navigation">
                    <!-- Navbar Menu -->
                    <ul class="text-left js-clone-nav d-none d-lg-inline-block site-menu">

                        <li><a href="{{ route('home') }}#features">Features</a></li>
                        <li><a href="{{ route('home') }}#pricing">Pricing</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                    </ul>

                    <ul class="float-right text-left js-clone-nav d-none d-lg-inline-block site-menu">

                        @php
                            $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance('plan');
                        @endphp
                        <!-- Shopping Cart -->
                        @if($cart->content()->isNotEmpty())
                        <li>
                            <a href="{{ route('cart') }}" class="text-decoration-none">
                                <i class="bi bi-cart" id="cart-icon"></i>
                                <span class="badge badge-primary" id="lblCartCount">{{ $cart->count() }}</span>
                            </a>
                        </li>
                        @endif
                        <!-- Shopping Cart -->
                        
                        @auth
                            <li class="has-children">
                                <a href="#">{{ str()->limit(Auth::user()->first_name, 15) }}</a>
                                <ul class="dropdown">
                                    <li class="dropdown-item"><a href="{{ route('dashboard') }}">My Account</a></li>
                                    <li class="dropdown-item"><a href="#">My Businesses</a></li>
                                    <hr class="dropdown-divider">
                                    <!-- Authentication -->
                                    <li class="dropdown-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                    <!-- Authentication -->
                                </ul>
                            </li>
                        @else
                            <li class=""><a href="{{ route('login') }}">Sign in</a></li>
                        @endauth

                        <li class="cta-button" id="trial-link"><a href="{{ route('demo') }}">Try it free</a></li>
                    </ul>

                    <a href="#" class="ml-auto burger light site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                    </a>
                 </div>
            </div>
        </nav>
         <!-- Navbar -->
        @yield('content')
    </main>
</body>
</html>