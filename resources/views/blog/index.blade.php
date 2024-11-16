@extends('layouts.app')

@section('meta-tag')
<meta name="description" content="Ndako is an all-in-one hospitality platform designed for property owners, managers, and tenants. Simplify property listings, financial tracking, and guest interactions, everything you need to streamline property management." />
<meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
@endsection

@section('page_title', "Our Blog")

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
<div class="hero-ban overlay pb-6 mb-4" id="hero" >
    <div class="container">
        <div class="intro-group row h-auto pt-8 text-center">
            <!-- Texte Gauche -->
            <div class="intro col-lg-12 col-md-12 col-sm-12">
                <h1 class="text-black caveat mb-3" style="font-size: 59px;" data-aos="fade-up" data-aos-delay="100">
                    Our Blog
                </h1>
            </div>

        </div>

    </div>
</div>
<!-- Hero End -->

<!-- Blog Section -->
<section class="features-lg">
    <div class="row">
        <!-- Blog Articles -->
         <div class="col-md-8 col-12 mb-2">
            <!-- Blog 1 -->
            <div class="card mb-3 rounded-2">
                <div class="row g-0">
                  <div class="col-md-4 col-12">
                    <img src="{{ asset('assets/images/blog/image-5.jpg')}}" class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ route('blog.show') }}">
                            <h5 class="card-title font-weight-bold">OTA vs Hotel Direct Booking: Which...</h5>
                        </a>
                        <p class="text-muted font-weight-bold">Published on Oct 21, 2024 by Arden BOUET</p>
                        <p class="mt-0">Discover the pros and cons of OTAs vs direct hotel bookings. Learn which option boosts revenue, guest loyalty, and control over your hotel business.</p>
                        <!-- Call to action and share icon -->
                        <div class="d-flex justify-content-between align-items-end mt-3">
                                <!-- Read more -->
                                <a href="{{ route('blog.show') }}" class="apps-bottom-button font-weight-bold">
                                    Read more <i class="bi bi-arrow-right"></i>
                                </a>
                                <!-- Read more -->

                                <div class="d-flex">
                                    <!-- Comments -->
                                      <span class="apps-bottom-button font-weight-bold mr-3">
                                        <i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
                                      </span>
                                    <!-- Comments -->

                                    <!-- Share icon -->
                                    <div class="share-dropdown">
                                        <a href="#" class="apps-bottom-button" onclick="toggleDropdown(event)" title="Share">
                                            <i class="bi bi-share-fill" style="font-size: 1.25rem;"></i>
                                        </a>
                                        <div class="dropdown-menu-custom">
                                            <a href="#"><i class="bi bi-facebook me-2"></i>Facebook</a>
                                            <a href="#"><i class="bi bi-twitter me-2"></i>Twitter</a>
                                            <a href="#"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
                                            <a href="#"><i class="bi bi-envelope me-2"></i>Email</a>
                                        </div>
                                    </div>
                                    <!-- Share icon -->
                                </div>
                        </div>
                        <!-- Call to action and share icon -->
                    </div>
                  </div>
                </div>
            </div>
            <!-- Blog 1 -->

            <!-- Blog 2 -->
            <div class="card mb-3 rounded-2">
                <div class="row g-0">
                  <div class="col-md-4 col-12">
                    <img src="{{ asset('assets/images/blog/image-6.jpg')}}" class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ route('blog.show') }}">
                            <h5 class="card-title font-weight-bold">Short-Term vs Long-Term Rentals...</h5>
                        </a>
                        <p class="text-muted font-weight-bold">Published on Sep 24, 2024 by Arden BOUET</p>
                        <p class="mt-0">Discover the differences between short-term vs long-term rentals. Explore profitability, ROI, and strategies for maximizing rental income.</p>
                        <!-- Call to action and share icon -->
                        <div class="d-flex justify-content-between align-items-end mt-3">
                                <!-- Read more -->
                                
                                <a href="{{ route('blog.show') }}" class="apps-bottom-button font-weight-bold">
                                    Read more <i class="bi bi-arrow-right"></i>
                                </a>
                                <!-- Read more -->

                                <div class="d-flex">
                                    <!-- Comments -->
                                      <span class="apps-bottom-button font-weight-bold mr-3">
                                        <i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
                                      </span>
                                    <!-- Comments -->

                                    <!-- Share icon -->
                                    <div class="share-dropdown">
                                        <a href="#" class="apps-bottom-button" onclick="toggleDropdown(event)" title="Share">
                                            <i class="bi bi-share-fill" style="font-size: 1.25rem;"></i>
                                        </a>
                                        <div class="dropdown-menu-custom">
                                            <a href="#"><i class="bi bi-facebook me-2"></i>Facebook</a>
                                            <a href="#"><i class="bi bi-twitter me-2"></i>Twitter</a>
                                            <a href="#"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
                                            <a href="#"><i class="bi bi-envelope me-2"></i>Email</a>
                                        </div>
                                    </div>
                                    <!-- Share icon -->
                                </div>
                        </div>
                        <!-- Call to action and share icon -->
                    </div>
                  </div>
                </div>
            </div>
            <!-- Blog 2 -->
         </div>
         <!-- Blog Articles -->

        <!-- Blog Sidebar -->
         <aside class="col-md-4 col-12">
            <!-- Blog Categories -->
            <div class="container border rounded p-3 mb-4">
                <div class="heading-wrapper">
                    <h5 class="">Categories</h5>
                    <div class="after-line"></div>
                </div>
                <ul class="category-ul">
                    <li>
                        <a href="#" class="category-list">Property Management System (26)</a>
                    </li>
                    <li class="category-list">
                        Hotels (11)
                    </li>
                    <li class="category-list">
                        Online Travel Agencies (12)
                    </li>
                    <li class="category-list">
                        Bed & Breakfast (7)
                    </li>
                    <li class="category-list">
                        Apartment (5)
                    </li>
                </ul>
            </div>
            <!-- Blog Categories -->

            <!-- Follow Us -->
             <div class="container mb-4">
                <div class="heading-wrapper mb-2">
                    <h5 class="">Follow Us</h5>
                    <div class="after-line"></div>
                </div>
                
                <!-- Social Icons -->
                 <div class="social-icons-wrapper">
                    <a target="_blank" href="https://www.instagram.com/koverae_/">
                        <img src="{{ asset('assets/images/third-icons/Instagram_icon.png')}}" height="40px" alt="" class="img mr-2">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/koverae/">
                        <img src="{{ asset('assets/images/third-icons/linkedin.png')}}" height="40px" alt="" class="img mr-2">
                    </a>
                    <a target="_blank" href="https://www.facebook.com/koverae">
                        <img src="{{ asset('assets/images/third-icons/facebook.png')}}" height="40px" alt="" class="img mr-2">
                    </a>
                    <a target="_blank" href="https://github.com/Koverae">
                        <img src="{{ asset('assets/images/third-icons/github.png')}}" height="40px" alt="" class="img mr-2">
                    </a>
                 </div>
                <!-- Social Icons -->
             </div>
            <!-- Follow Us -->
             
            <!-- Blog Newsletters -->
            <div class="container border rounded p-3 mb-4">
                <div class="heading-wrapper">
                    <h5 class="">Get property management tips straight to your inbox</h5>
                    <div class="after-line"></div>
                </div>
                <form action="" method="post">
                    <input type="email" name="email" required class="form-control mb-2" placeholder="youremail@example.com">
                    <button class="btn b-primary w-100">
                        Submit
                    </button>
                </form>
            </div>
            <!-- Blog Newsletters -->
         </aside>
         <!-- Blog Sidebar -->
    </div>
</section>
@endsection
