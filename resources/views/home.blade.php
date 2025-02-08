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
        <div class="h-auto pt-8 mb-3 intro-group row">
            <!-- Texte Gauche -->
            <div class="text-left intro col-lg-6 col-md-12 col-sm-12 align-items-start justify-content-start">
                <h1 class="mb-4 text-black" data-aos="fade-up" data-aos-delay="100">
                    Hotel Management made easy
                </h1>
                <p class="mb-5 text-left text-black align-items-start" data-aos-delay="100">
                    <strong>Ndako</strong>  is a simple and efficient cloud-based hotel management software designed for small and medium-sized hotels. Manage bookings, guests, and invoicing with ease, all in one place.
                </p>
                <!-- Call to action 1 -->
                <div class="gap-2 text-left intro-buttons d-flex" data-aos-delay="100">
                    <!-- Start Now -->
                    <a class="mr-2 btn start-now" href="{{ route('demo') }}">Start for free</a>
                    <!-- Bookig a demo -->
                    <a href="#" class="btn btn-light">Book a demo</a>
                </div>
                <!-- Call to action 2 -->
                <div class="text-secondary cta-2 font-weight-bold" data-aos-delay="100">
                    Handling 25+ rooms? <a class="explore-spark" href="{{ route('home') }}#pricing">Explore our Spark plan <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Illustration -->
            <div class="intro col-lg-6 col-md-12 col-sm-12">
                <!-- Vidéo illustrative -->
                    <video src="{{ asset('assets/videos/ndako-spot.mp4')}}" muted autoplay loop class="shadow homepage-video"></video>
            </div>

        </div>

        <div class="p-5 hero-card">
            <div class="mt-10 hero-tabs justify-content-center">
                <div class="flex pt-3 pb-3 mb-4 border-b toggle-hero">
                  <span class="p-3 tab-button active" onclick="showTab(event, 'booking')">Direct Booking</span>
                  <span class="p-3 tab-button" onclick="showTab(event, 'guest')">Guest Management</span>
                  <span class="p-3 tab-button" onclick="showTab(event, 'invoicing')">Invoicing</span>
                </div>
              
                <div id="booking" class="p-6 tab-content">
                    <p class="mt-2 text-gray-600">Seamlessly manage direct reservations, reduce dependency on OTAs, and maximize revenue.</p>
                    <img src="{{ asset('assets/images/view-1.webp') }}" alt="" class="position-relative w-100">
                </div>
                
                <div id="guest" class="hidden p-6 tab-content">
                  <p class="mt-2 text-gray-600">Keep track of guest profiles, stay history, and personalized experiences effortlessly.</p>
                  <img src="{{ asset('assets/images/view-1.webp') }}" alt="" class="position-relative w-100">
                </div>
              
                <div id="invoicing" class="hidden p-6 tab-content">
                  <p class="mt-2 text-gray-600">Automate invoicing, process payments, and ensure a smooth billing experience.</p>
                  <img src="{{ asset('assets/images/view-1.webp') }}" alt="" class="position-relative w-100">
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Hero End -->


<section class="mb-5 overflow-hidden section-main">
    <div class="container">
        <div class="m-5 d-flex justify-content-between align-items-center">
            <h2 class="k-card-title margin-0 caveat">
                {{ __('Work smarter by keeping everything in one place') }}
            </h2>
            <a class="mr-2 btn start-now" href="{{ route('demo') }}">{{ __('Get Started') }}</a>
        </div>
        <div class="gap-2 d-lg-flex d-block">
            <div class="p-5 mb-2 text-center mr-lg-2 k-card col-lg-6 col-12">
                <div class="k-card-header">
                    <h3 class="mb-1">{{ __('Integrations') }}</h3>
                    <div class="mb-4 span">Connect Ndako to your other tools.</div>
                </div>
                <div class="mt-4">
                    <div class="gap-3 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/third-icons/zapier-1.jpg') }}" height="43px" alt="" class="mr-2 img">
                        <img src="{{ asset('assets/images/third-icons/google-calendar.jpg') }}" height="43px" alt="" class="ml-2 img">
                    </div>
                    <div class="gap-3 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/third-icons/zapier-1.jpg') }}" height="43px" alt="" class="mr-2 img">
                        <img src="{{ asset('assets/images/third-icons/google-calendar.jpg') }}" height="43px" alt="" class="ml-2 img">
                        <img src="{{ asset('assets/images/third-icons/gmail.jpg') }}" height="43px" alt="" class="ml-2 img">
                    </div>
                    <div class="gap-3 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/third-icons/google-calendar.jpg') }}" height="43px" alt="" class="ml-2 img">
                        <img src="{{ asset('assets/images/third-icons/google-calendar.jpg') }}" height="43px" alt="" class="ml-2 img">
                    </div>
                    <div class="gap-3 d-flex justify-content-center">
                        <img src="{{ asset('assets/images/third-icons/zapier-1.jpg') }}" height="43px" alt="" class="ml-2 img">
                        <img src="{{ asset('assets/images/third-icons/zapier-1.jpg') }}" height="43px" alt="" class="ml-2 img">
                    </div>
                </div>
            </div>
            <div class="p-5 mb-2 text-center ml-lg-2 k-card col-lg-6 col-12">
                <div class="k-card-header">
                    <h3 class="mb-1">{{ __('Automations') }}</h3>
                    <div class="mb-4 span">{{ __('Save time with automated workflows.') }}</div>
                </div>
                <div class="mt-4">
                    <img class="w-100" src="{{ asset('assets/images/automation.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="p-5 mt-3 mb-2 mr-0 text-start k-card col-lg-12 col-12">
            <div class="d-flex justify-content-between">
                <div class="pt-4 k-card-header col-lg-6 text-start">
                    <h3 class="mb-0">{{ __('Reports') }}</h3>
                    <div class="mt-0 mb-4 span">{{ __('Dive into key KPIs and get clarity on financials.') }}</div>
                </div>
                <div class="p-0 col-lg-8 col-12">
                    <div class="mb-3 d-flex justify-content-between">
                        <img class="rounded" width="335px" src="{{ asset('assets/images/graph.jpg') }}" alt="">
                        <img class="rounded" width="335px" src="{{ asset('assets/images/activity.jpg') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-between">
                        <img class="rounded" width="335px" src="{{ asset('assets/images/client.jpg') }}" alt="">
                        <img class="rounded" width="335px" src="{{ asset('assets/images/activity.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Pricing -->
 <section class="pricing-section" id="pricing">
    <div class="mt-5 container-fluid">
      <div class="mb-5 text-center section-title" data-aos="fade-up" data-aos-delay="0">
        <h2 class="mb-5 heading font-weight-bold caveat">Plans tailored to your business</h2>

        <div class="toggle-outter d-inline-flex align-items-center">
            <div class="p-3 "><span class="text-white font-weight-bolder">Monthly</span></div>
            <div class="p-3 yearly active"><span class="text-white font-weight-bolder">Yearly</span><span class="bg-white save-percent" style="color: #026469;">Save 2 months Yearly</span></div>
        </div>
        
      </div>

      <div class="mb-3 overflow-x-auto row">

        <div class="mb-2 bg-white border rounded col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="pricing-item ">
            <h3>Ndako Starter</h3>
            <div class="mb-4 period-change d-block">
              <div class="price-wrap">
                <div class="price">
                  <div>
                    <div>KSh 5,600<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 7500</sup></div>
                    <div>KSh 7,150<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 9,500</sup></div>
                  </div>
                </div>
              </div>
              <div class="text-center d-inline-flex align-items-center period-wrap">
                <div class="mr-1 d-inline-block">Per</div>
                <div class="text-left d-block period">
                  <div>
                    <div><b>month (billed annually)</b></div>
                    <div><b>month <span class="text-white">(billed monthly)</span></b></div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Room Range -->
            <p class="mb-4 text-center text-gray-600">
                For <strong>1-10 rooms</strong> | Ideal for small hotels, boutique stays, and guesthouses.
            </p>

            <!-- Call To Action -->
            <div class="mb-4 ">
                <a href="{{ route('demo') }}" class="btn start-now col-12 font-weight-bold text-uppercase">{{ __('Buy Now') }}</a>
            </div>
            <div class="mb-4">
                <a href="{{ route('demo') }}" class="btn btn-light col-12 font-weight-bold">Start for free</a>
            </div>
            <!-- Call To Action -->

            <!-- Features -->
            <ul class="list-unstyled" style="height: 285px;">
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Direct Booking Management</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Guest Management</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Basic Invoicing</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Reporting & Insights</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Basic Support</span></li>
            </ul>
            <!-- Features -->

          </div>
        </div>

        <div class="mb-2 bg-white shadow col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="pricing-item ">
            <h3 class="mb-3">Ndako <span class="caveat">Spark</span></h3>
            <div class="mb-4 period-change d-block">
              <div class="price-wrap">
                <div class="price">
                  <div>
                    <div>KSh 9,400<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 12500</sup></div>
                    <div>KSh 11,250<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 15000</sup></div>
                  </div>
                </div>
              </div>
              <div class="text-center d-inline-flex align-items-center period-wrap">
                <div class="mr-1 d-inline-block">Per</div>
                <div class="text-left d-block period">
                  <div>
                    <div><b>month</b></div>
                    <div><b>month</b></div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Room Range -->
            <p class="mb-4 text-center text-gray-600">
                For <strong>11-45 rooms</strong> | For mid-sized hotels streamlining operations.
            </p>
            
            <!-- Call To Action -->
            <div class="mb-4 ">
                <a href="{{ route('demo') }}" class="btn start-now col-12 font-weight-bold text-uppercase">{{ __('Buy Now') }}</a>
            </div>
            <div class="mb-4">
                <a href="{{ route('demo') }}" class="btn btn-light col-12 font-weight-bold">Start for free</a>
            </div>
            <!-- Call To Action -->

            <!-- Features -->
            <ul class="list-unstyled" style="height: 285px;">
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Everything in Starter Plan, plus:</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Advanced Direct Booking Management</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Advanced Guest Management</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Customizable Invoicing</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Advanced Reporting & Insights</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Revenue Management (Basic)</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Website Booking Integration</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Payment Processing (M-Pesa, Stripe, PayPal)</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Priority Support</span></li>
            </ul>
            <!-- Features -->

          </div>
        </div>

        <div class="mb-2 border rounded col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Ndako Enterprise</h3>
            <div class="mb-4 period-change d-block">
              <div class="price-wrap">
                <div class="price">
                  <div>
                      <div>KSh 750.00<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 950</sup></div>
                      <div>KSh 950<sup style="text-decoration: line-through; font-size: 16px; font-weight: 400;">KSh 1,250</sup></div>
                  </div>
                </div>
              </div>
              <div class="text-center d-inline-flex align-items-center period-wrap">
                <div class="mr-1 d-inline-block">Per</div>
                <div class="text-left d-block period">
                  <div>
                    <div><b>room / month</b></div>
                    <div><b>room / month</b></div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Room Range -->
            <p class="mb-4 text-center text-gray-600">
                For <strong>46-150 rooms</strong> | Larger properties and hotel chains requiring advanced features.
            </p>
            
            <!-- Call To Action -->
            <div class="mb-4 ">
                <a href="{{ route('demo') }}" class="btn start-now col-12 font-weight-bold text-uppercase">{{ __('Buy Now') }}</a>
            </div>
            <div class="mb-4">
                <a href="{{ route('demo') }}" class="btn btn-light col-12 font-weight-bold">Start for free</a>
            </div>
            <!-- Call To Action -->

            <!-- Features -->
            <ul class="list-unstyled" style="height: 285px;">
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Everything in Spark Plan, plus:</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Multi-Property Management</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Advanced Revenue Management</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Full API Access</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Custom User Roles & Permissions</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Bulk Import/Export</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>OTA Connector</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Seamless Website Booking Integration</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>Full Guest Portal</span></li>
                <li class="d-flex"><span style="color: green;" class="mt-1 mr-2 feather-check-square"></span><span>24/7 Priority Support</span></li>
            </ul>
            <!-- Features -->

          </div>
        </div>

      </div>

      <!-- Demo CTA -->
      <div class="pt-3 mt-3 text-center text-black col-12">
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
      <h2 class="mb-5 text-center font-weight-bold heading caveat" data-aos="fade-up" data-aos-delay="0">
       {{__('Transforming the Industry to Empower Your Success')}}
      </h2>
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
          <!-- testimonials -->
          <div class="shadow testimonial--wrap">
            <div class="owl-single owl-carousel no-dots no-nav">

              <div class="testimonial-item">
                <div class="mb-4 d-flex align-items-center">
                  <div class="mr-3 photo">
                    <img src="{{ asset('assets/images/people/avatar-6.jpg')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author">
                    <cite class="mb-0 d-block">John Mwangi</cite>
                    <span>Hotel Manager, <b>Sunset View Resort</b></span>
                  </div>
                </div>
                <blockquote>
                  <p>&ldquo;
                    Before <strong>Ndako</strong>, managing our rooms, bookings, and guest communications was a nightmare. We spent hours each day just trying to keep everything organized. 
                    With <strong>Ndako</strong>, we now have a centralized platform where everything is streamlined, and we can focus more on guest satisfaction rather than the backend. We’ve seen a 20% increase in guest retention!
                    &rdquo;</p>
                </blockquote>
              </div>

              <div class="testimonial-item">
                <div class="mb-4 d-flex align-items-center">
                  <div class="mr-3 photo">
                    <img src="{{ asset('assets/images/people/avatar-12.jpg')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author">
                    <cite class="mb-0 d-block">Lillian Nyambura</cite>
                    <span>Front Desk Manager, <strong>Oasis Hotel Nairobi</strong></span>
                  </div>
                </div>
                <blockquote>
                  <p>&ldquo;
                    <strong>Ndako</strong>’s seamless integration has transformed how we manage our operations. 
                    The user-friendly interface made it easy for our staff to adopt, and now we handle everything from bookings to invoicing in one place. 
                    I highly recommend it to any hotelier who wants to save time and improve their workflow.
                    &rdquo;</p>
                </blockquote>
              </div>

              <div class="testimonial-item">
                <div class="mb-4 d-flex align-items-center">
                  <div class="mr-3 photo">
                    <img src="{{ asset('assets/images/people/avatar-11.JPG')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author">
                    <cite class="mb-0 d-block">David Kamau</cite>
                    <span>Operations Manager, <strong>Serene Suites Hotel</strong>.</span>
                  </div>
                </div>
                <blockquote>
                  <p>&ldquo;
                    Thanks to <strong>Ndako</strong>, we’ve eliminated double bookings and our invoicing process is much faster. 
                    The platform gives us more control over our revenue, and the insights we get are invaluable for improving operations.
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

</section>
<!-- Testimonials -->


<!-- CTA -->
<section class="p-4" style="margin-bottom: 25px;">
    <h3 class="mb-5 text-center caveat" style="font-size: 62px; line-height: 1.3;">
        Get started in 30 seconds. <br />
        Free for 7 days.
    </h3>
    <div class="text-center">
        <div class="mb-5" style="font-size: 20px; max-width: 700px; margin: 0 auto;">
            {{ __('Streamline your business operations and bring your properties, guests, and team together in one powerful, easy-to-use platform.') }}
        </div>
        
        <a href="{{ route('demo') }}" class="btn btn-lg b-primary font-weight-bold">
            Get started
        </a>
        <button class="btn btn-light">Book a demo</button>
        <small class="mt-3 d-block" style="font-size: 14px;">No payment required</small>
    </div>
</section>
<!-- CTA -->

<!-- FAQ -->
<section class="pt-12 pb-16 text-center">
    <div class="container">
      <h3 class="caveat" style="font-size: 59px; margin-bottom: 20px;">Frequently Asked Questions</h3>
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
                        Ndako is an all-in-one SaaS platform designed to streamline hotel operations, providing solutions for reservations, guest management, invoicing, reporting, and direct bookings, all in a single, easy-to-use system.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Is Ndako suitable for small, independent hotels?
                    </button>
                </h2>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes! Ndako is designed to be flexible and scalable, catering to small, independent hotels as well as larger chains. It provides essential features like booking management, guest communication, and reporting without being overwhelming.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do I need technical skills to use Ndako?
                    </button>
                </h2>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                    <div class="accordion-body">
                        No technical skills are required to use Ndako. The platform is designed to be user-friendly and intuitive. You'll have access to an easy-to-navigate interface and customer support if needed.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How does Ndako help me manage bookings?
                    </button>
                </h2>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Ndako offers seamless booking management by allowing you to view and manage all your bookings in one place. It integrates with popular booking channels, ensuring that you never overbook and that you can quickly update availability and prices.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How much does Ndako cost for hotels?
                    </button>
                </h2>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Ndako offers flexible pricing plans based on the size of your hotel and your specific needs. There is a free trial for the first 7 days, and after that, we offer affordable subscription plans based on the number of users and features required.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Does Ndako integrate with other booking engines or PMS?
                    </button>
                </h2>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes! Ndako integrates with multiple booking engines and Property Management Systems (PMS). You can easily sync bookings, update availability, and manage your property data across different channels, all from within the Ndako platform.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        How does Ndako handle payments and invoicing?
                    </button>
                </h2>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Ndako streamlines your payment and invoicing processes. You can set up automatic billing for guests, track payments, and generate invoices. Ndako also integrates with payment gateways for seamless transactions.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Is my hotel’s data secure on Ndako?
                    </button>
                </h2>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes, security is a top priority for Ndako. We implement industry-leading encryption protocols to ensure that your hotel’s data is safe and secure. We also regularly conduct security audits to protect against any potential vulnerabilities.
                    </div>
                </div>
            </div>
            <!-- accordion -->

            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Can I access Ndako from my mobile device?
                    </button>
                </h2>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion_1">
                    <div class="accordion-body">
                        Yes! Ndako is mobile-responsive, so you can manage your property, bookings, and finances directly from your mobile device, whether you’re on-site or on the go.
                    </div>
                </div>
            </div>
            <!-- accordion -->
            
            <!-- accordion -->
            <div class="accordion-item">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        How can I pay for my Ndako subscription?
                    </button>
                </h2>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion_1">
                    <div class="accordion-body">
                        You can easily pay for your Ndako subscription through a variety of methods:
                        <br>
                        <strong>Credit or Debit Card:</strong> We accept all major credit and debit cards.
                        <br>
                        <strong>Mobile Money (M-Pesa, Airtel Money, etc.):</strong> Convenient payment options for East Africa.
                        <br>
                        <strong>Bank Transfer:</strong> If you prefer to pay via bank transfer, you can contact our support team for bank details.
                        <br>
                        <strong>Online Payment Gateways:</strong> We also accept payments through popular online platforms like PayPal and Stripe.
                        <br>
                        After selecting your preferred payment method, you can proceed to the checkout page and complete your payment securely.
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

@section('scripts')
<script>
    function showTab(event, tabId) {
      document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
      document.getElementById(tabId).classList.remove('hidden');
      
      document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
      event.currentTarget.classList.add('active');
    }
    
    // Set the first tab as active by default
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelector(".tab-button").classList.add("active");
    });
  </script>
@endsection