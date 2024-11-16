@extends('layouts.app')

@section('meta-tag')
<meta name="description" content="Discover the pros and cons of OTAs vs direct hotel bookings. Learn which option boosts revenue, guest loyalty, and control over your hotel business." />
<meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
@endsection

@section('page_title', "OTA vs Hotel Direct Booking: Which is Better for Your Hotel?")

@section('open-graph')
<meta name="theme-color" content="#026469">
<meta property="og:title" content="OTA vs Hotel Direct Booking: Which is Better">
<meta property="og:image" content="{{ asset('assets/images/logo/logo-black.png') }}" />
<meta property="og:description" content="Discover the pros and cons of OTAs vs direct hotel bookings. Learn which option boosts revenue, guest loyalty, and control over your hotel business." />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.ndako.koverae.com/blog">
@endsection

@section('content')

<!-- Hero -->
<div class="hero-ban overlay pb-6 mb-4" id="hero" >
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white p-0">
            <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">OTA vs Hotel Direct Booking: Which is Better for Your Hotel?</li>
        </ol>
    </nav>
    <!-- Breadcrumb -->
    <h1 class="font-weight-bold">OTA vs Hotel Direct Booking: Which is Better for Your Hotel?</h1>
    <div class="d-flex justify-content-between align-items-end mt-3">
            <!-- Author -->
             <div class="author-blog">
                <img src="{{ asset('assets/images/people/arden-bouet.jpg')}}" class="rounded-circle" height="50px" alt="Arden BOUET">
                <div class="author-info">
                    <span>Arden BOUET</span>
                    <p class="text-muted font-weight-bold">Published on Nov 21, 2024 🕒 6 minute read</p>
                </div>
             </div>
            <!-- Author -->

            <div class="d-flex">
                <!-- Views -->
                  <span class="apps-bottom-button font-weight-bold mr-3">
                    <i class="bi bi-eye" style="font-size: 1.25rem;"></i>
                    <span>51</span>
                  </span>
                <!-- Views -->

                <!-- Comments -->
                  <span class="apps-bottom-button font-weight-bold mr-3">
                    <i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
                    <span>7</span>
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
</div>
<!-- Hero End -->

<!-- Blog Section -->
<section class="features-lg">

    <!-- Blog Content -->
     <div class="container mb-2">
        Blog Article content...
     </div>
    <!-- Blog Content -->

    <!-- Tags -->
     <div class="container">
        <cite>Tags</cite>
        <div class="d-flex">

            <span class="font-weight-bold mr-2">
                <a href="">Hotel</a>,
            </span>
            
            <span class="font-weight-bold mr-2">
                <a href="">OTA</a>,
            </span>
            
            <span class="font-weight-bold mr-2">
                <a href="">Channel Manager</a>
            </span>
        </div>
     </div>
    <!-- Tags -->

    <!-- Call To Action -->
    <div class="container mt-5 mb-5 text-center">
        <h3 class="caveat text-center display-1 mb-5" style="font-size: 62px;">
            Experience hassle-free property management.
        </h3>
        <a href="#" class="btn btn-lg b-primary font-weight-bold">
          Get started - It's free
        </a>
        <small class="d-block mt-3" style="font-size: 14px;">No payment required</small>
      </div>
    <!-- Call To Action -->

    <!-- Related Articles -->
    <h5 class="font-weight-bold">Related Articles</h5>
    <div class="row">
        <div class="card col-md-4 border-0 mb-3">
          <img src="{{ asset('assets/images/blog/image-5.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body p-0 pt-2">
            <h5 class="card-title font-weight-bold">What is the role of Online Trav...</h5>
            <p class="text-muted font-weight-bold">Oct 28, 2024 by Arden BOUET</p>
            <p class="card-text">Online travel agencies(OTAs) provide an online platform where travelers can search for, compare, and book</p>
            <!-- Call to action and share icon -->
            <div class="d-flex justify-content-between align-items-end mt-3">
                <!-- Read more -->
                <a href="blog-detail.html" class="apps-bottom-button font-weight-bold">
                    Read more <i class="bi bi-arrow-right"></i>
                </a>
                <!-- Read more -->

                    <div class="d-flex">
                        <!-- Comments -->
                        <span class="apps-bottom-button font-weight-bold mr-3">
                            <i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
                            <span>0</span>
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
        <div class="card col-md-4 border-0 mb-3">
          <img src="{{ asset('assets/images/blog/image-4.jpeg')}}" class="card-img-top" alt="...">
          <div class="card-body p-0 pt-2">
            <h5 class="card-title font-weight-bold">Benefits and Limitations of Onli...</h5>
            <p class="text-muted font-weight-bold">Nov 2nd, 2024 by Arden BOUET</p>
            <p class="card-text">The rise of online travel agencies (OTAs) has revolutionised the way people search, book, and experience</p>

            <!-- Call to action and share icon -->
            <div class="d-flex justify-content-between align-items-end mt-3">
                <!-- Read more -->
                <a href="blog-detail.html" class="apps-bottom-button font-weight-bold">
                    Read more <i class="bi bi-arrow-right"></i>
                </a>
                <!-- Read more -->

                    <div class="d-flex">
                        <!-- Comments -->
                        <span class="apps-bottom-button font-weight-bold mr-3">
                            <i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
                            <span>2</span>
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
        <div class="card col-md-4 border-0 mb-3">
          <img src="{{ asset('assets/images/blog/image-2.jpeg')}}" class="card-img-top" alt="...">
          <div class="card-body p-0 pt-2">
            <h5 class="card-title font-weight-bold">Discover the Best Travel Agenc...</h5>
            <p class="text-muted font-weight-bold">Sept 18, 2024 by Arden BOUET</p>
            <p class="card-text">Planning a vacation can be an exciting but daunting task. With so many destinations to choose from,</p>

            <!-- Call to action and share icon -->
            <div class="d-flex justify-content-between align-items-end mt-3">
                <!-- Read more -->
                <a href="blog-detail.html" class="apps-bottom-button font-weight-bold">
                    Read more <i class="bi bi-arrow-right"></i>
                </a>
                <!-- Read more -->

                    <div class="d-flex">
                        <!-- Comments -->
                        <span class="apps-bottom-button font-weight-bold mr-3">
                            <i class="bi bi-chat-dots" style="font-size: 1.25rem;"></i>
                            <span>7</span>
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
    <!-- Related Articles -->
    
</section>
@endsection
