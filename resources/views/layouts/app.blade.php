<!Doctype html>
<html lang="en_KE">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Koverae">
    @yield('meta-tag')
    
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.ico')}}">
    <title>@yield('page_title') - Ndako</title>
    
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "assets/images/logo/logo-black.png"
        }
    </script>
    <!-- Open Graph -->
    @yield('open-graph')
    <!-- Open Graph -->
    
    <!-- Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->

    <!-- Meta Pixel Code -->
    <!-- End Meta Pixel Code -->
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @yield('styles')

</head>
<body>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

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

    </main> <!-- END container -->



    <!-- Footer -->
     <footer class="bottom-0 mt-4 site-footer border-top">
       <div class="container">
         <div class="row justify-content-between">
           <div class="col-lg-4">
             <div class="widget">
               <p class="text-black">
                   <strong>Ndako</strong> is an all-in-one platform for property owners, managers, and tenants, streamlining listings, financials, and guest interactions.
               </p>
             </div>
             <div class="widget">
               <h3>Connect with Us</h3>
               <ul class="social list-unstyled">
                 <li><a href="https://www.facebook.com/koverae" target="_blank"><span class="icon-facebook"></span></a></li>
                 <li><a href="https://www.instagram.com/koverae_/" target="_blank"><span class="icon-instagram"></span></a></li>
                 <li><a href="https://www.linkedin.com/company/koverae/" target="_blank"><span class="icon-linkedin"></span></a></li>
                 <li><a href="https://github.com/Koverae" target="_blank"><span class="icon-github"></span></a></li>
                 <li><a href="tel:+2540745908026"><span class="icon-phone"></span></a></li>
                 <li><a href="mailto:ndako@koverae.com"><span class="icon-envelope"></span></a></li>
               </ul>
             </div>
           </div>
           <div class="col-lg-6">
             <div class="row">
               <div class="col-6 col-sm-6 col-md-4">
                 <div class="widget">
                   <h3>Community</h3>
                   <ul class="links list-unstyled">
                     <li><a href="https://koverae.com/docs/ndako/v1/">Documentation</a></li>
                     <li><a href="https://koverae.com/slides/ndako/">Tutorials</a></li>
                   </ul>
                 </div>
               </div>
               <div class="col-6 col-sm-6 col-md-4">
                 <div class="widget">
                   <h3>Services</h3>
                   <ul class="links list-unstyled">
                     <li><a href="#">Support</a></li>
                     <li><a href="#">Upgrade</a></li>
                   </ul>
                 </div>
               </div>
               <div class="col-6 col-sm-6 col-md-4">
                 <div class="widget">
                   <h3>About Us</h3>
                   <ul class="links list-unstyled">
                     <li><a href="https://koverae.com">Our Company</a></li>
                     <li><a href="{{route('privacy')}}#legal">Legal</a> • <a href="{{route('privacy')}}">Privacy</a> • <a href="{{route('privacy')}}#security">Security</a></li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <div class="text-center text-black row justify-content-center copyright">
           <div class="col-md-8">
               <p class="pb-0 mb-0"><span class="caveat" style="font-size: 25px;"> A <strong><a href="https://koverae.com">Koverae</a></strong>'s product</span></p>
             <p>Copyright &copy;<script>document.write(new Date().getFullAn());</script>. All Rights Reserved | <a href="https://koverae.com" target="_blank"><strong>Koverae</strong></a>
             </p>
           </div>
         </div>
       </div>
     </footer>
    <!-- Footer -->


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

      <script>
      $(document).ready(function() {
          var siteNav = $('.site-nav');
          var heroSection = $('#hero'); // Change to your actual hero section selector

          var hasHero = heroSection.length > 0;

          var heroOffset = hasHero ? heroSection.offset().top + heroSection.outerHeight() : 0;

          $(window).scroll(function() {
              var scrollPosition = $(window).scrollTop();

              if ((hasHero && scrollPosition > heroOffset) || !hasHero) {
                  siteNav.addClass('sticky');
              } else {
                  siteNav.removeClass('sticky');
              }
          });
      });

      </script>

      @yield('scripts')
    </body>
    </html>
