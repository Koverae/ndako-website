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
    <main class="under-dev">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('assets/images/logo/logo-black.png')}}" height="50px" alt="Koverae Logo">

                <h1 class="mt-4 caveat">Ndako - Property Management Made Easy</h1>
                <p class="mt-3 fs-5">We're building something exciting! Ndako is a powerful platform designed to simplify property management. Whether you're managing a single property or an entire portfolio, we’ve got you covered. Stay tuned for our upcoming launch, and be the first to experience the future of property management!</p>
                <p class="mt-1 fs-5">Be the first to know when we launch. Sign up below with your email to get exclusive updates and early access!</p>
                
                <form class="mt-1 d-lg-flex gap-2">
                    <input type="text" class="form-control k-input mb-lg-0 mb-2">
                    <a href="https://www.ndako.koverae.com?medium=dotcom" class="btn k-primary p-2 fw-bold ml-2">Sign Up for Updates</a>
                </form>

                <!-- <div class="mt-2">
                    <h4>Thank you for signing up! 🎉</h4>
                    <p class="mt-2 fs-5">
                        You’re one step closer to revolutionizing your property management experience. Stay tuned for updates! 🚀
                    </p>
                </div> -->

            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('assets/images/errors/503.svg')}}"style="object-fit: cover; width: 100%;" alt="">
            </div>
        </div>
    </main>
</body>
</html>