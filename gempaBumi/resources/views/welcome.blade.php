@extends('layouts.app')
@section('content')
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">25% OFF At First Monthly Services
                        </h4>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">Jumlah Gempa hari ini</h1>
                        
                        <h5 class="wow fadeInUp" data-wow-delay=".8s">23 Kejadian</h5>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Tetap Waspada dan jangan panik</p>
						<div class="button wow zoomIn" data-wow-delay="1s">
                            <a href="#pricing"><i class="lni lni-arrow-down-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Domain Search -->
    <section class="domain-search">
        <div class="container">
            <div class="inner-cotainer">
                <img class="sahpe" src="assets/images/shapes/shape.png" alt="#">
                <img class="sahpe2" src="assets/images/shapes/shape.png" alt="#">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="content">
                            <h2><span>Looking for Unique Domain Name?</span>Check Your Domain Now</h2>
                            <!-- Start Search Form -->
                            <div class="search-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="search-input">
                                            <input type="text" name="name" id="name"
                                                placeholder="Enter Your Domain Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="search-input">
                                            <label for="extention"><i class="lni lni-chevron-down"></i></label>
                                            <select name="extention" id="extention">
                                                <option value="none" selected>.com</option>
                                                <option value="none">.net</option>
                                                <option value="none">.store</option>
                                                <option value="none">.info</option>
                                                <option value="none">.to</option>
                                                <option value="none">.io</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="search-btn button">
                                            <button class="btn">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Search Form -->
                            <ul class="extention-list">
                                <li><a href="javascript:void(0)">
                                        .com
                                        <span>$9.95/yr</span>
                                    </a>
                                </li>
                                <li><a href="javascript:void(0)">
                                        .net
                                        <span>$8.25/yr</span>
                                    </a>
                                </li>
                                <li><a href="javascript:void(0)">
                                        .info
                                        <span>$7.22/yr</span>
                                    </a>
                                </li>
                                <li><a href="javascript:void(0)">
                                        .store
                                        <span>$10.99/yr</span>
                                    </a>
                                </li>
                                <li><a href="javascript:void(0)">
                                        .org
                                        <span>$12.90/yr</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Domain Search -->

    <!-- Start Features Area -->
    <section class="features section">
        <img class="shape" src="assets/images/shapes/shape.png" alt="#">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Our Principles</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Explore our awesome features</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Explore and learn more about everything from
                            machine learning and global payments to scaling
                            your team.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="list-icon">
                            <i class="lni lni-bolt"></i>
                        </div>
                        <h3>Faster Loading Speed</h3>
                        <p>Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.
                        </p>
                    </div>
                    <!-- End Single Feature -->
                    <!-- Start Single List -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="list-icon">
                            <i class="lni lni-lock"></i>
                        </div>
                        <h3>100% Safe and Secure</h3>
                        <p>Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.
                        </p>
                    </div>
                    <!-- End Single List -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <div class="list-icon">
                            <i class="lni lni-dashboard"></i>
                        </div>
                        <h3>99% Uptime Guarantee</h3>
                        <p>Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.
                        </p>
                    </div>
                    <!-- End Single Feature -->
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <div class="list-icon">
                            <i class="lni lni-headphone"></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                        <p>Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.
                        </p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 align-center">
                    <div class="explore-all button">
                        <a href="javascript:void(0)" class="btn">Explore all features</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Pricing Style 2 Area -->
    <div class="pricing-style2 section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Pricing Plan</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Choose Your Plan</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Explore and learn more about everything from
                            machine learning and global payments to scaling
                            your team.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Pricing s-->
                    <div class="single-pricing">
                        <div class="p-icon">
                            <i class="lni lni-folder"></i>
                        </div>
                        <h3 class="title">Shared Starter</h3>
                        <p class="des">Lorem ipsum dolor sit amet, conse tetur adipiscing elit.</p>
                        <span class="start-at">Starting at:</span>
                        <h3 class="price">
                            $49<span class="sent">.99</span><span class="duration">/mo</span>
                        </h3>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Order Now</a>
                        </div>
                    </div>
                    <!-- End Single Pricing s-->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Pricing s-->
                    <div class="single-pricing">
                        <div class="p-icon">
                            <i class="lni lni-handshake"></i>
                        </div>
                        <h3 class="title">Shared Business</h3>
                        <p class="des">Lorem ipsum dolor sit amet, conse tetur adipiscing elit.</p>
                        <span class="start-at">Starting at:</span>
                        <h3 class="price">
                            $69<span class="sent">.99</span><span class="duration">/mo</span>
                        </h3>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Order Now</a>
                        </div>
                    </div>
                    <!-- End Single Pricing s-->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Pricing s-->
                    <div class="single-pricing">
                        <div class="p-icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <h3 class="title">Shared Premium</h3>
                        <p class="des">Lorem ipsum dolor sit amet, conse tetur adipiscing elit.</p>
                        <span class="start-at">Starting at:</span>
                        <h3 class="price">
                            $89<span class="sent">.99</span><span class="duration">/mo</span>
                        </h3>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Order Now</a>
                        </div>
                    </div>
                    <!-- End Single Pricing s-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Style 2 Area -->

    <!-- Start Call Action Area -->
    <section class="call-action">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="text">
                            <h2>You are using free
                                <br> <span>Lite version of HostGrids.</span>
                            </h2>
                            <p style="display: block;margin-top: 10px;">Please, purchase full version of the template to
                                get all pages,
                                features and commercial license. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="button">
                            <a href="#" class="btn">Buy Pro Version
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer section">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/white-logo.svg" alt="#">
                                    </a>
                                </div>
                                <p>We are Hostpack 29 years of experience on this field with most talanted peoples and
                                    leaders.
                                </p>
                                <a class="call" href="tel:8884014678"><i class="lni lni-phone-set"></i> 888-401-4678</a>
                                <div class="payments">
                                    <img src="assets/images/footer/cards.png" alt="#">
                                </div>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                                <p class="copyright-text">© 2023 HostGrids.<br>
                                    Designed and Developed by <a href="https://graygrids.com/"
                                        target="_blank">GrayGrids</a></p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Pages</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Services</a></li>
                                    <li><a href="javascript:void(0)">Pricing <span style="margin-left: 4px;"
                                                class="badge bg-success rounded text-white">Try Me</span></a></li>
                                    <li><a href="javascript:void(0)">Contact</a></li>
                                </ul>
                                <h4 class="mt-40 mb-20 text-white" style="font-size: 18px;">Hosting</h4>
                                <ul>
                                    <li><a href="javascript:void(0)">Shared Hosting</a></li>
                                    <li><a href="javascript:void(0)">Dedicated Hosting</a></li>
                                    <li><a href="javascript:void(0)">Reseller Hosting</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Security</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                                    <li><a href="javascript:void(0)">Disclaimer</a></li>
                                    <li><a href="javascript:void(0)">FAQ</a></li>
                                </ul>
                                <h4 class="mt-40 mb-20 text-white" style="font-size: 18px;">Support</h4>
                                <ul>
                                    <li><a href="javascript:void(0)">Support Center</a></li>
                                    <li><a href="javascript:void(0)">Status Updates</a></li>
                                    <li><a href="javascript:void(0)">Knowledgebase</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer latest-news">
                                <h3>Latest News</h3>
                                <div class="single-head">
                                    <!-- Start Single News -->
                                    <div class="single-news">
                                        <span class="date"><a href="javascript:void(0)">NOVEMBER 29, 2023</a></span>
                                        <h4 class="post-title"><a href="blog-single.html">An artistic Technology turning
                                                real here</a>
                                        </h4>
                                    </div>
                                    <!-- End Single News -->
                                    <!-- Start Single News -->
                                    <div class="single-news">
                                        <span class="date"><a href="javascript:void(0)">NOVEMBER 22, 2023</a></span>
                                        <h4 class="post-title"><a href="blog-single.html">better time for buying a web
                                                hosting is
                                                today</a>
                                        </h4>
                                    </div>
                                    <!-- End Single News -->
                                    <!-- Start Single News -->
                                    <div class="single-news">
                                        <span class="date"><a href="javascript:void(0)">NOVEMBER 15, 2023</a></span>
                                        <h4 class="post-title"><a href="blog-single.html">better time for buying a web
                                                hosting is
                                                today</a>
                                        </h4>
                                    </div>
                                    <!-- End Single News -->
                                </div>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <p class="text">Offers valid for a limited time only hostpack reflect multi annual
                                discounts. Other terms and conditions may apply. <a href="javascript:void(0)">Click
                                    Here</a>

                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="align-right">
                                <img src="assets/images/footer/certificate3.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>


@endsection