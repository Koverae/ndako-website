@extends('layouts.app')

@section('meta-tag')
<meta name="description" content="Ndako is an all-in-one hospitality platform designed for property owners, managers, and tenants. Simplify property listings, financial tracking, and guest interactions, everything you need to streamline property management." />
<meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
@endsection

@section('page_title', "Property Management Made Easy")

@section('open-graph')
<meta name="theme-color" content="#026469">
<meta property="og:title" content="Ndako - Property Management System">
<meta property="og:image" content="{{ asset('assets/images/logo/logo-black.png') }}" />
<meta property="og:description" content="All-in-one hospitality platform" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.ndako.koverae.com">
@endsection

@section('content')

<!-- Hero -->
<div class="pb-6 hero-ban overlay" id="hero" >
    <div class="container">
        <div class="h-auto pt-8 intro-group row">
            <!-- Texte Gauche -->
            <div class="text-left intro col-lg-6 col-md-12 col-sm-12 align-items-start justify-content-start">
                <h1 class="mb-4 text-black" data-aos="fade-up" data-aos-delay="100">
                    Property Management made easy
                </h1>
                <p class="mb-5 text-left text-black align-items-start" data-aos-delay="100">
                    Dozens of businesses like yours trust <strong>Ndako</strong> for their technology. From listings to financial tracking, <strong>Ndako</strong> lets you focus on what matters most ,  your business.
                </p>
                <!-- Call to action 1 -->
                <div class="gap-2 text-left intro-buttons d-flex" data-aos-delay="100">
                    <!-- Start Now -->
                    <a class="mr-2 btn start-now" href="{{ route('demo') }}">Start it for free</a>
                    <!-- Bookig a demo -->
                    <button class="btn btn-light">Book a demo</button>
                </div>
                <!-- Call to action 2 -->
                <div class="text-secondary cta-2 font-weight-bold" data-aos-delay="100">
                    Have more than 3 employees? <a class="explore-spark" href="{{ route('home') }}#pricing">Explore our Spark plan <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Illustration -->
            <div class="intro col-lg-6 col-md-12 col-sm-12">
                <!-- Vidéo illustrative -->
                    <video src="{{ asset('assets/videos/ndako-spot.mp4')}}" muted autoplay loop class="shadow homepage-video"></video>
                    <!-- <img src="{{ asset('assets/images/img-h-7.png')}}" alt="" class="shadow homepage-video"> -->
            </div>

        </div>

    </div>
</div>
<!-- Hero End -->

<!-- App Section -->
<div class="mt-8 site-section" id="features">
    <div class="container app-section">
        <div class="">
            <h2 class="mb-5 col-12 title-center" data-aos="fade-up" data-aos-delay="500">
                A platform designed for your business
            </h2>
        </div>

        <div class="mb-3 row">
    
            <!-- Reservations and Distribution Made Easy -->
            <div class="px-3 col col-lg-4 d-flex flex-column align-items-center apps-list">
                <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Reservations and Distribution Made Easy</h3>
                <div class="mt-3 d-inline-flex k_animate">
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/reservation.png')}}" alt="" class="inline p-2 deep-1">
                        <b class="inline text-body">Reservation System</b>
                    </a>
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/channel-manager.png')}}" alt="Channel Manager" class="inline p-2 deep-1">
                        <b class="inline text-body">Channel Manager</b>
                    </a>
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/revenue-manager.png')}}" alt="Revenue Management" class="inline p-2 deep-1">
                        <b class="inline text-body">Revenue Management</b>
                    </a>
                </div>
            </div>
            <!-- Reservations and Distribution Made Easy -->
    
            <!-- Enhancing the In-Stay Experience -->
            <div class="px-3 col col-lg-4 d-flex flex-column align-items-center apps-list">
                <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Enhancing the In-Stay Experience</h3>
                <div class="mt-3 d-inline-flex k_animate">
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/front-desk.png')}}" alt="Front-desk" class="inline p-2 deep-1">
                        <b class="inline text-body">Front-desk</b>
                    </a>
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/crm.png')}}" alt="CRM" class="inline p-2 deep-1">
                        <b class="inline text-body">CRM</b>
                    </a>
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/housekeeping.png')}}" alt="Housekeeping" class="inline p-2 deep-1">
                        <b class="inline text-body">Housekeeping</b>
                    </a>
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/pos.png')}}" alt="Point of Sales" class="inline p-2 deep-1">
                        <b class="inline text-body">Pos</b>
                    </a>
                </div>
            </div>
            <!-- Enhancing the In-Stay Experience -->
    
            <!-- Streamlined Back Office & Reporting -->
            <div class="px-3 col col-lg-4 d-flex flex-column align-items-center apps-list">
                <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Streamlined Back Office & Reporting</h3>
                <div class="mt-3 d-inline-flex k_animate">
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/analytics.png')}}" alt="Reporting and Analytics" class="inline p-2 deep-1">
                        <b class="inline text-body">Reporting and Analytics</b>
                    </a>
                    <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                        <img src="{{ asset('assets/images/apps/back-office.png')}}" alt="Back Office" class="inline p-2 deep-1">
                        <b class="inline text-body">Back Office</b>
                    </a>
                </div>
            </div>
            <!-- Streamlined Back Office & Reporting -->
    
        </div>
    
        <div class="col-12"  data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="float-right apps-bottom-button font-weight-bold" href="">
                Learn more <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- App Section End -->

<!-- Testimonial for simplicity -->
<section class="pt-24 pb-16">
    <div class="container">
        <div class="flex-col p-4 bg-white shadow testimony-1 d-flex">
            <picture class="mb-6 col-md-3 d-none d-md-inline image-testimony">
                <img class="mr-6 rounded-circle" src="{{ asset('assets/images/people/avatar-1.png')}}" height="150px" alt="">
            </picture>
            <div class="col-md-9">
                <h5 class="mb-4 text-black caveat" style="font-size: 26px;">
                    Like a craftsman whose genius is amplified by the quality of his tools, each professional, equipped with the right solutions, transforms his talent into tangible success, shaping the future of his company with precision and passion.
                </h5>
                <div class="text-secondary">
                    Aramera MAMADOU, Owner of <strong>Conso Plus</strong>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial for simplicity -->

<!-- PMS Presentation -->
<section class="features-lg ">
    <div class="container">
        <!-- Head Section -->
        <div class="row feature align-items-center justify-content-between">
            <div class="col-lg-5 section-stack order-lg-2 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('assets/images/illustrations/pms-presentation-1.png')}}" class="rounded" alt="">
    
            </div>
            <div class="col-lg-7 section-title" data-aos="fade-up" data-aos-delay="100">
    
                <h2 class="mb-1 text-title font-weight-bold heading caveat" id="first-title">
                    Mastering the Art of Performance
                    <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">When the Right Tools Shape the Future</h5>
                </h2>
                <p class="mb-1 text-black">
                    Imagine a property manager whose expertise is limited without the right tools. The synergy between experience and technology turns ordinary management into extraordinary results. In property management, each task, whether managing listings, tracking finances, or enhancing guest satisfaction, benefits from the tools at hand. With Ndako’s all-in-one platform, property managers transform operations, showing that excellence is born from the union of skill and the right tools.
                </p>
                <!-- Call to action 1 -->
                <div class="gap-2 mt-3 text-left intro-buttons d-flex" data-aos-delay="100">
                    <!-- Start Now -->
                    <a class="mr-2 btn start-now" href="{{ route('demo') }}">Start it for free</a>
                    <!-- Bookig a demo -->
                    <a href="#" class="btn btn-light">Book a demo</a>
                </div>
                <!-- Call to action 1 -->
    
            </div>
    
        </div>
        <!-- Head Section -->
         
        <!-- Bottom Section -->
        <div class="row align-items-center justify-content-between">
            <!-- Effortless Property Listings -->
            <div class="col-lg-6 section-title" data-aos="fade-up" data-aos-delay="100">
                <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">Effortless Property Listings</h5>
                <p class="mb-1 text-black">
                    Easily manage and update property listings with Ndako, keeping your portfolio attractive and current for tenants and guests.
                </p>
            </div>
            <!-- Effortless Property Listings -->

            <!-- Financial Tracking Made Easy -->
            <div class="col-lg-6 section-title" data-aos="fade-up" data-aos-delay="100">       
                <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">Financial Tracking Made Easy</h5>
                <p class="mb-1 text-black">
                    Track revenue and expenses in one place with Ndako, gaining clear insights to drive better financial decisions.
                </p>          
            </div>
            <!-- Financial Tracking Made Easy -->
    
        </div>
        <!-- Bottom Section -->
    </div>
</section>
<!-- PMS Presentation -->

<!-- Channel Manager Presentation -->
<section class="features-lg ">
    <div class="container">
        <!-- Head Section -->
        <div class="row feature align-items-center justify-content-between">
            <div class="mb-4 col-lg-5 mb-lg-0 section-stack" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('assets/images/illustrations/pms-presentation-1.png')}}" class="rounded" alt="">
    
            </div>
            <div class="col-lg-7 section-title" data-aos="fade-up" data-aos-delay="100">
    
                <h2 class="mb-1 text-title font-weight-bold heading caveat" id="first-title">
                    Seamless Connectivity
                    <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">Effortlessly Expand Your Reach</h5>
                </h2>
                <p class="mb-1 text-black">
                    Ndako’s Channel Manager ensures your property is visible across multiple booking platforms, effortlessly syncing availability, pricing, and reservations in real time. This streamlined connectivity allows you to expand your reach, attract more guests, and prevent double bookings all from a single, user-friendly interface. With Ndako, maximize occupancy while minimizing administrative work, letting you focus on providing an exceptional guest experience.
                </p>
                <!-- Call to action 1 -->
                <div class="gap-2 mt-3 text-left intro-buttons d-flex" data-aos-delay="100">
                    <!-- Start Now -->
                    <a class="mr-2 btn start-now" href="{{ route('demo') }}">Start it for free</a>
                    <!-- Bookig a demo -->
                    <a href="#" class="btn btn-light">Book a demo</a>
                </div>
    
            </div>
    
        </div>
        <!-- Head Section -->
         
        <!-- Bottom Section -->
        <div class="row align-items-center justify-content-between">
            <!-- Effortless Property Listings -->
            <div class="col-lg-6 section-title" data-aos="fade-up" data-aos-delay="100">
                <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">Effortlessly Expand Your Reach</h5>
                <p class="mb-1 text-black">
                    With Ndako’s Channel Manager, connect to multiple booking platforms in real time, keeping availability and pricing updated instantly. Improve efficiency and save money instead of using direct connections or 3rd party systems.
                </p>
            </div>
            <!-- Effortless Property Listings -->

            <!-- Financial Tracking Made Easy -->
            <div class="col-lg-6 section-title" data-aos="fade-up" data-aos-delay="100">       
                <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">Centralized Booking Control</h5>
                <p class="mb-1 text-black">
                    Manage reservations from one platform with ease, reducing administrative tasks and maximizing occupancy. Ndako lets you focus on enhancing guest experiences while staying fully booked.
                    Connection includes Airbnb and Booking and others.
                </p>          
            </div>
            <!-- Financial Tracking Made Easy -->
    
        </div>
        <!-- Bottom Section -->
    </div>
</section>
<!-- Channel Manager Presentation -->

<!-- Guests/Tenants Space  Presentation -->
<section class="features-lg ">
    <div class="container">
        <!-- Head Section -->
        <div class="row feature align-items-center justify-content-between">
            <div class="shadow col-lg-5 section-stack order-lg-2 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('assets/images/illustrations/tenant-space.png')}}" class="rounded" alt="">
    
            </div>
            <div class="col-lg-7 section-title" data-aos="fade-up" data-aos-delay="100">
    
                <h2 class="mb-1 text-title font-weight-bold heading caveat" id="first-title">
                    A Space to Belong
                    <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">A Seamless Experience for Everyone</h5>
                </h2>
                <p class="mb-1 text-black">
                    Ndako’s Guest App provides a dedicated space where guests and tenants can easily access essential information, communicate with management, and manage their stay. From seamless check-ins to service requests and payment processing, this personalized portal enhances their experience, making interactions smooth and memorable. With Ndako, empower your guests and tenants to feel truly at home.
                </p>
                <!-- Call to action 1 -->
                <div class="gap-2 mt-3 text-left intro-buttons d-flex" data-aos-delay="100">
                    <!-- Start Now -->
                    <a class="mr-2 btn start-now" href="{{ route('demo') }}">Start it for free</a>
                    <!-- Bookig a demo -->
                    <a href="#" class="btn btn-light">Book a demo</a>
                </div>
    
            </div>
    
        </div>
        <!-- Head Section -->
         
        <!-- Bottom Section -->
        <div class="row align-items-center justify-content-between">
            <!-- Effortless Property Listings -->
            <div class="col-lg-6 section-title" data-aos="fade-up" data-aos-delay="100">
                <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">A Personalized Experience</h5>
                <p class="mb-1 text-black">
                    Guests and tenants can easily manage their stay and communicate with property managers. Everything they need is just a tap away.
                </p>
            </div>
            <!-- Effortless Property Listings -->

            <!-- Financial Tracking Made Easy -->
            <div class="col-lg-6 section-title" data-aos="fade-up" data-aos-delay="100">       
                <h5 class="mt-2 mb-3 text-title font-weight-bold heading" id="second-title">Streamlined Service & Requests</h5>
                <p class="mb-1 text-black">
                    From service requests to payments, Ndako makes managing stays simple. Streamlined and hassle-free for both guests and managers.
                </p>          
            </div>
            <!-- Financial Tracking Made Easy -->
    
        </div>
        <!-- Bottom Section -->
    </div>
</section>
<!-- Guests/Tenants Space  Presentation -->

<!-- Integration Presentation -->
<!-- Integration Presentation -->

<!-- Pricing -->
 <section class="pricing-section" id="pricing">
    <div class="container mt-5">
      <div class="mb-5 text-center section-title" data-aos="fade-up" data-aos-delay="0">
        <h2 class="mb-5 heading font-weight-bold caveat">Plans tailored to your business</h2>

        <div class="switch-plan">

          <div class="d-inline-flex align-items-center">
            
            <div class="period"><span class="mr-2">Yearly</span> <span class="save-percent" style="background-color: #026469;">Save 2 months Yearly</span></div>
            <a href="#" wire:click="togglePeriod" class="period-toggle js-period-toggle"></a>
            <div class="period"><span class="mr-2">Monthly</span></div>
          </div>

        </div>
      </div>

      <div class="pl-3 overflow-x-auto row">
        <div class="mb-2 bg-white col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <div class="pricing-item ">
            <h3>Standard</h3>
            <div class="mb-4 period-change d-block">
              <div class="price-wrap">
                <div class="price">
                  <div>
                    <div>KSh 0 (Free)</div>
                    <div>KSh 0 (Free)</div>
                  </div>
                </div>
              </div>
              <div class="text-center d-inline-flex align-items-center period-wrap">
                <div class="mr-1 d-inline-block">Per</div>
                <div class="text-left d-block period">
                  <div>
                    <div><b>employee / month</b></div>
                    <div><b>employee / month</b></div>
                  </div>
                </div>
              </div>
            </div>
             
            <!-- Features -->
            <ul class="list-unstyled" style="height: 285px;">
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span><strong>All apps</strong></span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span>For <strong>3</strong> employees</span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span>Ndako Cloud <i class="bi bi-cloud"></i></span></li>
            </ul>
            <!-- Features -->
            <!-- Call To Action -->
            <div class="mb-4 ">
                <a href="{{ route('demo') }}" class="btn start-now col-12 font-weight-bold text-uppercase">Start Now</a>
              </div>
              <!-- Call To Action -->

          </div>
        </div>

        <div class="mb-2 shadow col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Spark</h3>
            <div class="mb-4 period-change d-block">
              <div class="price-wrap">
                <div class="price">
                  <div>
                      <div>KSh 950.00<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 1,200</sup></div>
                      <div>KSh 1,200<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 1,700</sup></div>
                  </div>
                </div>
              </div>
              <div class="text-center d-inline-flex align-items-center period-wrap">
                <div class="mr-1 d-inline-block">Per</div>
                <div class="text-left d-block period">
                  <div>
                    <div><b>employee / month</b></div>
                    <div><b>employee / month</b></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Features -->
            <ul class="list-unstyled" style="height: 285px;">
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span><strong>All apps</strong></span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span>Ndako Cloud <i class="bi bi-cloud"></i></span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span><b>Unlimited</b> employees</span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span>Multi Property Management</span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span>Multi-Company</span></li>
                <hr>
                <li class="d-flex"><span class="mt-1 mr-2 feather-check-square"></span><span>1 Personalized Website (Optional)</span></li>
            </ul>
            <!-- Features -->

            <!-- Call To Action -->
            <div class="mb-4">
                <button type="submit" class="btn start-now col-12 font-weight-bold text-uppercase">Buy Now</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('demo') }}" class="btn btn-secondary col-12 font-weight-bold">Start a free trial</a>
            </div>
            <!-- Call To Action -->

          </div>
        </div>

      </div>
      <!-- Apps -->
      <div class="pt-5 pb-3 text-center text-black col-12">
        <p><strong>Spark</strong> plan includes all applications for a single fee:</p>
      </div>
      <div class="text-center row justify-content-center">
        <!-- POS -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/reservation.png')}}" height="70px" alt="Point de vente" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                Reservation
            </div>
        </div>
        <!-- POS -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/pos.png')}}" height="70px" alt="Point de vente" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                PDV
            </div>
        </div>
        <!-- POS -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/crm.png')}}" height="70px" alt="Point de vente" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                CRM
            </div>
        </div>
        <!-- Channel Manager -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/channel-manager.png')}}" height="70px" alt="Point de vente" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                Channel Manager
            </div>
        </div>
        <!-- Revenue Manager -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/revenue-manager.png')}}" height="70px" alt="Revenue Manager" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                Revenue Manager
            </div>
        </div>
        <!-- Reporting and Analytics -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/analytics.png')}}" height="70px" alt="Reporting and Analytics" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                Reporting and Analytics
            </div>
        </div>
        <!-- Front desk -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/front-desk.png')}}" height="70px" alt="Front-desk" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                Front-desk
            </div>
        </div>
        <!-- Housekeeping -->
        <div class="mb-3 text-black col-4 col-md-3 col-lg-2 col-xl">
            <img src="{{ asset('assets/images/apps/housekeeping.png')}}" height="70px" alt="Housekeeping" class="rounded-1">
            <div class="mt-2 nowrap font-weight-bold">
                Housekeeping
            </div>
        </div>
      </div>

      <!-- Demo CTA -->
      <div class="mt-3 text-center text-black col-12">
        <p>
            All our plans include <strong>unlimited support</strong> , <strong>hosting</strong> and <strong>maintenance</strong> . No hidden fees, no feature or data limits: enjoy true transparency!
        </p>
        <div>
            (*) The discount is valid for 12 months, for the initial plan ordered.
        </div>
      </div>
    </div>
 </section>
<!-- Pricing -->
         
<!-- Testimonials -->
<section class="testimonial-section">
    <div class="container">
      <h2 class="mb-4 text-center font-weight-bold heading caveat" data-aos="fade-up" data-aos-delay="0">
        How we shape the industry and help you succeed
      </h2>
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
          <!-- testimonials -->
          <div class="shadow testimonial--wrap">
            <div class="owl-single owl-carousel no-dots no-nav">
  
              <div class="testimonial-item">
                <div class="mb-4 d-flex align-items-center">
                  <div class="mr-3 photo">
                    <img src="{{ asset('assets/images/people/avatar-2.png')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author">
                    <cite class="mb-0 d-block">John Otieno</cite>
                    <span>Manager, Sunrise Ltd.</span>
                  </div>
                </div>
                <blockquote>
                  <p>&ldquo;
                    Becoming a <strong>Kover</strong> was a turning point for our establishment. 
                    Their personalized approach and constant support not only helped us optimize our processes but also gave us the confidence to aim higher. 
                    Every day, we feel the positive impact of their solution on our productivity.
                </blockquote>
              </div>
  
              <div class="testimonial-item">
                <div class="mb-4 d-flex align-items-center">
                  <div class="mr-3 photo">
                    <img src="{{ asset('assets/images/people/avatar-2.png')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author">
                    <cite class="mb-0 d-block">Ishaan Sanjay</cite>
                    <span>Manager, <strong>Myrat Residence</strong>.</span>
                  </div>
                </div>
                <blockquote>
                  <p>&ldquo;
                    The implementation of <strong>Ndako</strong> in the residence marked a clear improvement in the flow of our daily operations. Positive feedback from our clients on the speed and personalization of our service has never been so abundant.
                    &rdquo;</p>
                </blockquote>
              </div>
            </div>
            <div class="custom-nav-wrap">
              <a href="#" class="custom-owl-prev"><span class="icon-keyboard_backspace"></span></a>
              <a href="#" class="custom-owl-next"><span class="icon-keyboard_backspace"></span></a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    <!-- call to action -->
    <div class="container mt-5 mb-5 text-center">
      <h3 class="mb-5 text-center caveat display-1" style="font-size: 62px;">
        Explore your growth potential!
      </h3>
      <a href="{{ route('demo') }}" class="btn btn-lg b-primary font-weight-bold">
        Get started - It's free
      </a>
      <small class="mt-3 d-block" style="font-size: 14px;">No payment required</small>
    </div>
  
</section>
<!-- Testimonials -->

<!-- FAQ -->
<section class="pt-12 pb-16 text-center">
    <div class="container">
      <h3 class="caveat" style="font-size: 59px;">Frequently Asked Questions</h3>
      <div class="text-center row">
        <div class="col-lg-12">
          <div class="custom-accordion" id="accordion_1">
              <!-- accordion -->
              <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is <strong>Ndako</strong>?
                    </button>
                </h2>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Ndako is an integrated SaaS platform designed to simplify and optimize property and rental management, offering solutions for property listings, guest services, tenant management, and financial reporting.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can Ndako help my property management business?
                    </button>
                </h2>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                    <div class="accordion-body">
                        <strong>Ndako</strong> streamlines operations by automating tasks, centralizing data, and improving decision-making, all tailored for efficient property management.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Is <strong>Ndako</strong> suitable for different types of property businesses?
                    </button>
                </h2>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> is built to support a range of property management needs, from small rental properties to multi-unit portfolios, adaptable to various real estate sectors.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How long does it take to set up <strong>Ndako</strong> for my business?
                    </button>
                </h2>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Setup times vary based on the size of your portfolio and process complexity, but we aim to make onboarding as smooth as possible, often within a few weeks.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Can <strong>Ndako</strong> integrate with my existing systems?
                    </button>
                </h2>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> is designed to integrate smoothly with various property and financial systems via flexible APIs, enabling a seamless data transition.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        How can I train my team to use <strong>Ndako</strong>?
                    </button>
                </h2>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion_1">
                    <div class="accordion-body">
                        <strong>Ndako</strong> provides online tutorials, webinars, and tailored training sessions to ensure your team becomes proficient quickly.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Can I customize <strong>Ndako</strong> to meet my specific business needs?
                    </button>
                </h2>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Absolutely, <strong>Ndako</strong> offers extensive customization options to align with your unique property management processes.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How can I add new users to <strong>Ndako</strong>?
                    </button>
                </h2>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Adding new users is simple and can be done directly within your business portal, typically by adding new staff members to your organization’s Ndako account.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        How does <strong>Ndako</strong> protect my business data?
                    </button>
                </h2>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion_1">
                    <div class="accordion-body">
                        <strong>Ndako</strong> uses advanced security protocols, including data encryption, firewalls, and continuous monitoring, to safeguard your information.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Who can access my business data on <strong>Ndako</strong>?
                    </button>
                </h2>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Only users you authorize can access your business data, with customizable access levels according to their roles and responsibilities.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        What are the key features of <strong>Ndako</strong>?
                    </button>
                </h2>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Key features include property listings, tenant management, basic financial reporting, and guest/tenant portals.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        Does <strong>Ndako</strong> offer reporting and analytics?
                    </button>
                </h2>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> provides real-time insights, daily email reports, and analytics to help you understand your property’s performance and make data-driven decisions.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        What kind of support does <strong>Ndako</strong> offer?
                    </button>
                </h2>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion_1">
                    <div class="accordion-body">
                        <strong>Ndako</strong> offers full customer support, including assistance by phone, email, live chat, and access to online resources.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                        What is <strong>Ndako</strong>'s pricing structure?
                    </button>
                </h2>
                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion_1">
                    <div class="accordion-body">
                        <strong>Ndako</strong> offers tiered pricing plans to suit various needs, including a free Basic plan for smaller users and paid options like the Spark plan for expanded functionality and more extensive user management. Contact us for Enterprise-level customization and multi-property support.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                        How do I get started with <strong>Ndako</strong>?
                    </button>
                </h2>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion_1">
                    <div class="accordion-body">
                        You can sign up for <strong>Ndako</strong> on our website, choose your plan, and start setting up your property management tools. Our team is available to guide you through onboarding to ensure you’re set up for success.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">What should I do if I encounter a bug or technical issue with <strong>Ndako</strong>?</button>
                </h2>
            
                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion_1">
                    <div class="accordion-body">
                        If you experience a technical issue, please contact our support team immediately. We are committed to resolving any problems as quickly as possible to minimize any impact on your business operations.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">How does <strong>Ndako</strong> handle service interruptions?</button>
                </h2>
            
                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion_1">
                    <div class="accordion-body">
                        We have established strict protocols to manage service interruptions, including regular backups and disaster recovery plans, to ensure maximum availability of our service.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne"><strong>Ndako</strong> enables collaborative work between teams, right?</button>
                </h2>
            
                <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> facilitates real-time collaboration between teams, allowing for information sharing, project management, and effective communication within your organization.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">How can I share reports or data with my team on <strong>Ndako</strong>?</button>
                </h2>
            
                <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Reports and data can be shared directly through the platform, with options to control access and visibility according to your team's needs.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">Can I access <strong>Ndako</strong> from my phone or tablet?</button>
                </h2>
            
                <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> is accessible on mobile devices through a dedicated app or a web browser, allowing you to manage your business from anywhere.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">Are there any access restrictions to <strong>Ndako</strong> based on geographic location?</button>
                </h2>
            
                <div id="collapseTwentyFour" class="collapse" aria-labelledby="headingTwentyFour" data-parent="#accordion_1">
                    <div class="accordion-body">
                        No, <strong>Ndako</strong> is designed to be accessible worldwide, as long as you have an internet connection.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyFive" aria-expanded="false" aria-controls="collapseTwentyFive">What are the technical requirements for using <strong>Ndako</strong>?</button>
                </h2>
            
                <div id="collapseTwentyFive" class="collapse" aria-labelledby="headingTwentyFive" data-parent="#accordion_1">
                    <div class="accordion-body">
                        <strong>Ndako</strong> is designed to be lightweight and compatible with most modern systems. Specific requirements may vary depending on the modules you use, but generally, a stable internet connection and a recent web browser are sufficient.
                    </div>
                </div>
            
            </div> 
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentySix" aria-expanded="false" aria-controls="collapseTwentySix"><strong>Ndako</strong> compatible with Mac and PC?</button>
                </h2>
            
                <div id="collapseTwentySix" class="collapse" aria-labelledby="headingTwentySix" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> is fully compatible with both Mac and PC operating systems, ensuring maximum flexibility for your business.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentySeven" aria-expanded="false" aria-controls="collapseTwentySeven">Is <strong>Ndako</strong> compliant with privacy and data protection standards?</button>
                </h2>
            
                <div id="collapseTwentySeven" class="collapse" aria-labelledby="headingTwentySeven" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> strictly adheres to privacy and data protection standards, ensuring the security and compliance of your information.
                    </div>
                </div>
            
            </div> 
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyEight" aria-expanded="false" aria-controls="collapseTwentyEight">How can I delete my data from <strong>Ndako</strong> if necessary?</button>
                </h2>
            
                <div id="collapseTwentyEight" class="collapse" aria-labelledby="headingTwentyEight" data-parent="#accordion_1">
                    <div class="accordion-body">
                        If you wish to delete your data, you can request it from our support team, who will ensure that your information is removed in accordance with our privacy policy and legal requirements.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyNine" aria-expanded="false" aria-controls="collapseTwentyNine">Can I use <strong>Ndako</strong> to manage multiple businesses?</button>
                </h2>
            
                <div id="collapseTwentyNine" class="collapse" aria-labelledby="headingTwentyNine" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, <strong>Ndako</strong> allows you to manage multiple businesses under one account, making it easy to oversee various commercial activities.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">Is there a <strong>Ndako</strong> user community where I can share ideas and advice?</button>
                </h2>
            
                <div id="collapseThirty" class="collapse" aria-labelledby="headingThirty" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, we encourage the creation of a dynamic <strong>Ndako</strong> user community, providing a space to exchange ideas, advice, and best practices for maximizing the use of the platform.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
             
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyOne" aria-expanded="false" aria-controls="collapseThirtyOne">How do I pay for my <strong>Ndako</strong> subscription?</button>
                </h2>
            
                <div id="collapseThirtyOne" class="collapse" aria-labelledby="headingThirtyOne" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Payments for <strong>Ndako</strong> subscriptions can be made through various secure online payment methods, including credit cards and local options.
                    </div>
                </div>
            
            </div>
            <!-- accordion -->
  
          </div>
        </div>
      </div>
    </div>
</section>
<!-- FAQ -->

@endsection
