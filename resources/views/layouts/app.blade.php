<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <title>@yield('title') - Ndako</title>

  <!--Meta For No Index-->
  <meta name="robots" content="noindex, Nofollow, Noimageindex">

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/fontawesome/all.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/fancybox/fancybox.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/swiper/swiper.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico')}}" type="image/x-icon" />
  


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "assets/images/logo/logo.png"
    }
</script>
<!-- Open Graph -->
@yield('open-graph')
<!-- Open Graph -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ1L2Y7QS6"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HJ1L2Y7QS6');
</script>
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
</head>

<body class="relative overflow-x-hidden text-base antialiased bg-white dark:bg-dark-300 font-Inter">
    <div class="toggle-button fixed right-5 max-lg:bottom-2.5 lg:top-1/3 z-[10000000000]">
      <button
        id="theme-toggle"
        type="button"
        class="flex items-center justify-center w-10 h-10 border rounded-md text-paragraph dark:text-white focus:outline-none focus:ring-0 focus:ring-gray-200 border-paragraph/25 dark:border-borderColour-dark"
      >
        <svg
          id="theme-toggle-dark-icon"
          class="hidden w-5 h-5 ml-1 -mt-[1px]"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg
          id="theme-toggle-light-icon"
          class="hidden w-5 h-5"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
            fill-rule="evenodd"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
    </div>

  <div
    class="fixed top-0 left-0 z-10 w-full py-2 text-center transition-all duration-500 origin-top scale-y-100 top-nav bg-primary"
    id="top-nav"
  >
    <p class="font-medium max-lg:text-sm text-paragraph dark:text-paragraph">
        Get 40% off your first subscription – <a href="#">Sign up now!</a>
    </p>
  </div>


  <header
  class="fixed left-0 top-15 z-[1000000000] duration-500  transition-all w-full bg-transparent"
  id="mainnavigationBar"
>
  <nav class="container relative flex items-center">
    <div class="nav-logo">
      <a href="{{ route('home') }}">
        <img
            src="{{ asset('assets/images/ndako.png')}}"
            alt="logo"
            class="dark:hidden"
            style="height: 55px;"

        />
        <img
            src="{{ asset('assets/images/ndako-light.png')}}"
            alt="logo dark version"
            class="hidden dark:inline-block"
            style="height: 55px;"
        />
      </a>
    </div>
    <ul class="nav-list hidden lg:flex lg:ml-7 xl:ml-15  [&>*:not(:last-child)]:me-1">
      <li>
        <a href="{{route('home')}}#features" class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors ">
            Features
        </a>
      </li>
      <li>
        <a href="{{route('home')}}#pricing" class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors ">
            Pricing
        </a>
      </li>
      <li>
        <a href="{{route('home')}}#faq" class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors ">
            FAQs
        </a>
      </li>

    </ul>
    <ul class="flex items-center ml-auto  [&>*:not(:last-child)]:me-2.5">
      <li class="">
        <button
          class="bg-white dark:bg-dark-200 p-2.5 rounded-full "
          id="open-btn"
        >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
            <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
            <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
        </svg>
        </button>
      </li>
      <li class="max-lg:hidden">
        <a href="{{ route('demo') }}" class="btn-sm bg-white dark:!bg-white dark:!text-paragraph btn-outline cursor-fancy">
          Book demo
        </a>
      </li>
      <li class="max-lg:hidden">
        <a href="#" class="btn btn-navbar btn-sm">
          Start free
        </a>
      </li>
      <li class="max-lg:inline-block lg:hidden ">
        <button class="relative w-10 h-10 bg-white rounded-full outline-none mobile-menu-button dark:bg-dark-200 ">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="22"
            height="14"
            viewBox="0 0 22 14"
            fill="none"
            class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          >
            <path
              d="M0 1C0 0.447715 0.447715 0 1 0H21C21.5523 0 22 0.447715 22 1C22 1.55228 21.5523 2 21 2H1C0.447716 2 0 1.55228 0 1Z"
              fill=""
              class="fill-paragraph dark:fill-white"
            />
            <path
              d="M8 7C8 6.44772 8.44772 6 9 6H21C21.5523 6 22 6.44772 22 7C22 7.55228 21.5523 8 21 8H9C8.44772 8 8 7.55228 8 7Z"
              fill=""
              class="fill-paragraph dark:fill-white"
            />
            <path
              d="M4 13C4 12.4477 4.44772 12 5 12H21C21.5523 12 22 12.4477 22 13C22 13.5523 21.5523 14 21 14H5C4.44772 14 4 13.5523 4 13Z"
              fill=""
              class="fill-paragraph dark:fill-white"
            />
          </svg>
        </button>
      </li>
    </ul>
    <div class="mobile-menu max-lg:overflow-y-auto">
      <button
        class="absolute w-10 h-10 bg-white rounded-full outline-none navbar-toggle-close dark:bg-dark-200 right-6 top-5"
      >
        <i class="fa-solid fa-times"></i>
      </button>
      <ul class="nav-list flex flex-col gap-5 w-full max-w-[500px] landscape:h-full relative">
        <li class="">
          <a href="{{route('home')}}#features" class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors ">
            Features
          </a>
        </li>
        <li class="">
          <a href="{{route('home')}}#pricing" class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors ">
            Pricing
          </a>
        </li>
        <li class="">
          <a href="{{route('home')}}#faq" class="font-Inter flex items-center text-base font-medium leading-8 text-paragraph dark:text-white py-[5px] px-5 lg:px-4 xl:px-5 border rounded-large border-transparent hover:bg-white hover:border-borderColour dark:hover:bg-dark-200 dark:hover:border-borderColour/10 duration-500 hover:duration-500 transition-colors ">
            FAQs
          </a>
        </li>

        <li>
          <a
            href="request-demo.html"
            class="btn btn-navbar btn-sm"
          >
            Request Demo
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>

@yield('content')


<section class="relative pt-20 overflow-hidden bg-white dark:bg-dark-300">
  <div class="container">
    <div class="grid grid-cols-12 mb-20 max-lg:gap-y-10 max-lg:text-center">
      <div class="col-span-12 lg:col-span-6">
        <img
            src="{{ asset('assets/images/ndako.png')}}"
            alt="logo"
            class="inline-block mb-10 dark:hidden"
            style="height: 55px;"
        />
        <img
            src="{{ asset('assets/images/ndako-light.png')}}"
            alt="logo dark version"
            class="hidden mb-10 dark:inline-block"
            style="height: 55px;"
        />
        <p class="max-w-[350px] max-lg:mx-auto">
            Ndako is an all-in-one platform for property owners, managers, and tenants, streamlining listings, financials, and guest interactions.
        </p>
      </div>
      <div class="col-span-12 lg:col-span-2 max-lg:text-center">
        <h3 class="mb-8 text-lg font-medium">Explore</h3>
        <ul class="[&>*:not(:last-child)]:mb-3">
          <li>
            <a href="{{route('home')}}#pricing" class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              Pricing
            </a>
          </li>
          <li>
            <a
              href="#"
              class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              FAQ's
            </a>
          </li>
        </ul>
      </div>
      <div class="col-span-12 lg:col-span-2 max-lg:text-center">
        <h3 class="mb-8 text-lg font-medium">Resources</h3>
        <ul class="[&>*:not(:last-child)]:mb-3">
          <li>
            <a
              href="https://ndako.tawk.help/"
              target="_blank"
              class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              Documentation
            </a>
          </li>
          <li>
            <a href="https://ndako.tawk.help/" target="_blank" class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
              Support
            </a>
          </li>
          <li>
            <a
              href="https://ndako.tawk.help/" target="_blank"
              class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              Integration 
            </a>
          </li>
          <li>
            <a
              href="https://app.koverae.com/ndako/sign-in" target="_blank"
              class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              Log In
            </a>
          </li>
        </ul>
      </div>
      <div class="col-span-12 lg:col-span-2 max-lg:text-center">
        <h3 class="mb-8 text-lg font-medium">Get In touch</h3>
        <p class="mb-3">Need Support?</p>
        <p class="mb-3">
          <a
            href="mailto:contact@koverae.com"
            class="relative inline-block overflow-hidden text-base text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
          >
            contact@koverae.com
          </a>
        </p>

        <p class="mb-3">
          <a
            href="tel:+254745908026"
            class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100">
            +254 745 90 80 26
          </a>
        </p>
        <ul class="flex items-center gap-4 max-lg:justify-center social-link">
          <li>
            <a
              href="#"
              class="transiton-all"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="28"
                viewBox="0 0 28 28"
                fill="none"
              >
                <path
                  d="M26.25 14.0749C26.25 7.26802 20.7655 1.75 14 1.75C7.23451 1.75 1.75 7.26802 1.75 14.0749C1.75 20.2265 6.22962 25.3254 12.0859 26.25V17.6375H8.97559V14.0749H12.0859V11.3595C12.0859 8.27062 13.9148 6.5644 16.7129 6.5644C18.0528 6.5644 19.4551 6.80512 19.4551 6.80512V9.83819H17.9104C16.3888 9.83819 15.9141 10.7883 15.9141 11.764V14.0749H19.3115L18.7684 17.6375H15.9141V26.25C21.7704 25.3254 26.25 20.2265 26.25 14.0749Z"
                  fill=""
                  class="fill-paragraph dark:fill-gray-100 hover:fill-primary dark:hover:fill-primary"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="28"
                viewBox="0 0 28 28"
                fill="none"
              >
                <path
                  d="M14 1.75C7.23187 1.75 1.75 7.23187 1.75 14C1.75 19.4206 5.25656 23.9991 10.1259 25.6222C10.7384 25.7294 10.9681 25.3619 10.9681 25.0403C10.9681 24.7494 10.9528 23.7847 10.9528 22.7587C7.875 23.3253 7.07875 22.0084 6.83375 21.3194C6.69594 20.9672 6.09875 19.88 5.57812 19.5891C5.14937 19.3594 4.53688 18.7928 5.56281 18.7775C6.5275 18.7622 7.21656 19.6656 7.44625 20.0331C8.54875 21.8859 10.3097 21.3653 11.0141 21.0437C11.1213 20.2475 11.4428 19.7116 11.795 19.4053C9.06938 19.0991 6.22125 18.0425 6.22125 13.3569C6.22125 12.0247 6.69594 10.9222 7.47687 10.0647C7.35437 9.75844 6.92562 8.50281 7.59937 6.81844C7.59937 6.81844 8.62531 6.49687 10.9681 8.07406C11.9481 7.79844 12.9894 7.66062 14.0306 7.66062C15.0719 7.66062 16.1131 7.79844 17.0931 8.07406C19.4359 6.48156 20.4619 6.81844 20.4619 6.81844C21.1356 8.50281 20.7069 9.75844 20.5844 10.0647C21.3653 10.9222 21.84 12.0094 21.84 13.3569C21.84 18.0578 18.9766 19.0991 16.2509 19.4053C16.695 19.7881 17.0778 20.5231 17.0778 21.6716C17.0778 23.31 17.0625 24.6269 17.0625 25.0403C17.0625 25.3619 17.2922 25.7447 17.9047 25.6222C20.3365 24.8012 22.4497 23.2383 23.9468 21.1534C25.4438 19.0685 26.2493 16.5667 26.25 14C26.25 7.23187 20.7681 1.75 14 1.75Z"
                  fill=""
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="28"
                viewBox="0 0 28 28"
                fill="none"
              >
                <path
                  d="M14.0037 2C9.04517 2 4.57804 4.9866 2.6827 9.56221C0.787361 14.1378 1.83395 19.409 5.33745 22.9125C8.84096 26.4161 14.1122 27.4626 18.6878 25.5673C23.2698 23.6783 26.2564 19.2112 26.2564 14.2527C26.2564 7.48819 20.7682 2 14.0037 2ZM10.4427 20.7045H7.76885V12.0893H10.4427V20.7045ZM9.1026 10.9151C8.47082 10.9151 7.90286 10.5386 7.66036 9.95787C7.41786 9.37715 7.54549 8.70708 7.9922 8.26036C8.43253 7.81365 9.1026 7.67964 9.68333 7.91576C10.2641 8.15188 10.647 8.71984 10.6533 9.34524C10.6533 10.2131 9.96412 10.9087 9.1026 10.9151ZM20.4555 20.7045H17.7816V16.5118C17.7816 15.5099 17.7625 14.2336 16.3904 14.2336C15.0184 14.2336 14.7759 15.3184 14.7759 16.4416V20.7045H12.1147V12.0893H14.6801V13.2635H14.7184C15.0758 12.5871 15.9437 11.8724 17.2455 11.8724C19.9513 11.8724 20.4491 13.6528 20.4491 15.9694V20.7045H20.4555Z"
                  fill="#7D807B"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="28"
                viewBox="0 0 28 28"
                fill="none"
              >
                <path
                  d="M12.0604 11.9583C12.0604 11.0204 11.4224 11.0204 11.4224 11.0204H8.79375V13.0302H11.2565C11.684 13.0302 12.0604 12.8962 12.0604 11.9583Z"
                  fill=""
                />
                <path
                  d="M18.1408 13.0302C16.7499 13.0302 16.5521 14.4211 16.5521 14.4211H19.5125C19.5189 14.4211 19.538 13.0302 18.1408 13.0302Z"
                  fill="#7D807B"
                />
                <path
                  d="M11.4224 14.4211H8.80013V16.8328H11.1225C11.1608 16.8328 11.2182 16.8328 11.2884 16.8328C11.6648 16.8264 12.373 16.718 12.373 15.6589C12.373 14.4083 11.4224 14.4211 11.4224 14.4211Z"
                  fill="#7D807B"
                />
                <path
                  d="M14 1.75C7.24336 1.75 1.75 7.24336 1.75 14C1.75 20.7566 7.24336 26.25 14 26.25C20.7566 26.25 26.25 20.7566 26.25 14C26.25 7.24336 20.7566 1.75 14 1.75ZM16.1693 9.94857H19.8889V11.0587H16.1693V9.94857ZM14.2871 15.7737C14.2871 18.5236 11.4224 18.4342 11.4224 18.4342H6.73294V9.41901H11.4224C12.8516 9.41901 13.9745 10.2102 13.9745 11.818C13.9745 13.4322 12.5964 13.5342 12.5964 13.5342C14.4083 13.5342 14.2871 15.7737 14.2871 15.7737ZM21.2479 15.627H16.5776C16.5776 17.3049 18.1663 17.1965 18.1663 17.1965C19.6656 17.1965 19.6146 16.2267 19.6146 16.2267H21.2033C21.2033 18.8043 18.1152 18.6257 18.1152 18.6257C14.4147 18.6257 14.6508 15.1803 14.6508 15.1803C14.6508 15.1803 14.6444 11.7159 18.1152 11.7159C21.7583 11.7095 21.2479 15.627 21.2479 15.627Z"
                  fill=""
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="seperator">
      <img
        src="{{ asset('assets/images/footer-seperator.svg')}}"
        alt="footer-seperator"
        class="object-cover w-full dark:hidden"
      />
      <img
        src="{{ asset('assets/images/footer-seperator-dark.svg')}}"
        alt="footer-seperator"
        class="hidden object-cover w-full dark:block"
      />
    </div>

    <div class="py-10 max-lg:text-center">
      <div class="flex gap-2 max-lg:flex-col lg:items-center">
        <p class="pb-0 mb-0"><span class="caveat" style="font-size: 25px;"> A <strong class=" font-weight-bolder"><a href="https://koverae.com">Koverae</a></strong>'s product</span></p>
        <p class="max-lg:mb-10">@ <span id="date"></span> Koverae. All Rights Reserved</p>
        <ul class="flex items-center lg:ml-auto gap-15 max-lg:justify-center">
          <li>
            <a
              href="{{ route('privacy') }}"
              class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              Privacy Policy
            </a>
          </li>
          <li>
            <a
              href="{{ route('terms') }}"
              class="relative inline-block overflow-hidden text-base capitalize text-paragraph dark:text-white before:absolute before:bottom-0 before:left-0 before:h-[1px] before:w-full before:origin-right before:scale-x-0 before:bg-paragraph dark:before:bg-white  before:transition-transform before:duration-500 before:content-[''] before:hover:origin-left before:hover:scale-x-100"
            >
              Terms & Conditions
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!---Modal -->
<div
  aria-hidden="false"
  class="fixed z-[99999999990] hidden inset-0 top-0 items-start justify-center  bg-metal-900 bg-dark-200/25"
  onclick="javascript.void(0)"
  id="modal"
  role="dialog"
>
  <div class="relative w-full h-auto max-w-xl p-4 animate-keep-bounce">
    <div class="relative bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5 ">
      <div class="p-10 border border-gray-100 border-dashed rounded dark:border-borderColour-dark max-lg:p-5">
        <div
          class="flex items-center justify-between pb-5 border-b border-dashed bg border-b-borderColour dark:border-borderColour-dark"
        >
          <h3 class="text-paragraph dark:text-white">Search</h3>
          <button
            class="text-paragraph dark:text-white"
            id="ok-btn"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="currentColor"
              viewBox="0 0 256 256"
            >
              <rect
                width="256"
                height="256"
                fill="none"
              ></rect>
              <circle
                cx="128"
                cy="128"
                r="96"
                fill="none"
                stroke="currentColor"
                stroke-miterlimit="10"
                stroke-width="16"
              ></circle>
              <line
                x1="160"
                y1="96"
                x2="96"
                y2="160"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
              ></line>
              <line
                x1="160"
                y1="160"
                x2="96"
                y2="96"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
              ></line>
            </svg>
          </button>
        </div>
        <form class="mt-5">
          <div>
            <div class="flex">
              <div class="relative w-full">
                <input
                  class="block w-full focus:outline-none focus:ring-0 text-paragraph-light dark:text-paragraph-light  border-borderColour py-2.5 px-5  border border- rounded-medium bg-transparent  placeholder:text-paragraph dark:placeholder:text-white outline-none focus:border-primary dark:focus:border-primary  duration-300 transition-all"
                  id="#id-10"
                  placeholder="Search Component"
                  type="text"
                  value=""
                />
              </div>
            </div>
          </div>
        </form>
        <p class="hidden pt-5 mb-12 font-medium"><span>No recent searches</span></p>
        <div class="pt-5">
          <h3 class="mb-1">Search Result</h3>
          <ul
            class="[&>*:not(:last-child)]:border-dashed [&>*:not(:last-child)]:border-gray-100  dark:[&>*:not(:last-child)]:border-borderColour-dark  [&>*:not(:last-child)]:border-b"
          >
            <li class="group ">
              <a
                class="flex items-center justify-between py-5 font-medium "
                href="services-single.html"
              >
                Investment Banks
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </li>
            <li class="group">
              <a
                href="services-single.html"
                class="flex items-center justify-between py-5 font-medium "
              >
                Financial Analysis <i class="fa-solid fa-angle-right"></i>
              </a>
            </li>
            <li class="group">
              <a
                href="services-single.html"
                class="flex items-center justify-between py-5 font-medium "
              >
                Sales & Trading <i class="fa-solid fa-angle-right"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<!--
  #############
  Footer Area
  #############
-->
<!-- Mark up for Script Section-->

<script src="{{ asset('assets/vendor/fancybox/fancybox.js')}}"></script>
<script src="{{ asset('assets/vendor/gsap/gsap.min')}}.js"></script>
<script src="{{ asset('assets/vendor/gsap/motionpath.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper.js')}}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('assets/vendor/stackItem/stackItem.js')}}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
