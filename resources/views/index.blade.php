<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/icofont/icofont.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />

        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/tolak.css') }}" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="custom-cursor">

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <div class="preloader">
            <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">
            <div class="topbar-one">
                <div class="container">
                    <div class="topbar-one__inner">
                        <ul class="list-unstyled topbar-one__info">
                            <li class="topbar-one__info__item">
                                <i class="fas fa-envelope topbar-one__info__icon"></i>
                                <a href="mailto:demo@example.com">demo@example.com</a>
                            </li>
                            <li class="topbar-one__info__item">
                                <i class="fas fa-map-marker-alt topbar-one__info__icon"></i>
                                <a href="https://www.google.com/maps">27, Dhaka London City, LOT</a>
                            </li>
                        </ul><!-- /.list-unstyled topbar-one__info -->
                        <ul class="topbar-one__links">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="contact.html">Register</a></li>
                            <li><a href="services.html">Service</a></li>
                        </ul><!-- /.topbar-one__links -->
                    </div><!-- /.topbar-one__inner -->
                </div><!-- /.container-fluid -->
            </div><!-- /.topbar-one -->

            <header class="main-header sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__logo">
                            <a href="index.html">
                                <img src="assets/images/logo-dark.png" alt="Tolak HTML" width="184">
                            </a>
                        </div><!-- /.main-header__logo -->

                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list">


                                <li class="megamenu megamenu-clickable megamenu-clickable--toggler">
                                    <a href="index.html">Demos</a>
                                    <ul>
                                        <li>
                                            <div class="megamenu-popup">
                                                <a href="#" class="megamenu-clickable--close"><span class="icon-close"></span></a>
                                                <!-- /.megamenu-clickable--close -->
                                                <div class="megamenu-popup__content">
                                                    <div class="demo-one">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-5.jpg" alt="tolak">
                                                                            <span class="demo-one__image__new">New</span>
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-5.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-5-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-5.html">Home Page 05</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-6.jpg" alt="tolak">
                                                                            <span class="demo-one__image__new">New</span>
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-6.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-6-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-6.html">Home Page 06</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-7.jpg" alt="tolak">
                                                                            <span class="demo-one__image__new">New</span>
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-7.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-7-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-7.html">Home Page 07</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-1.jpg" alt="tolak">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-dark.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Dark Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index.html">Home Page 01</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-2.jpg" alt="tolak">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-2.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-2-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-2-dark.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Dark Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-2.html">Home Page 02</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-3.jpg" alt="tolak">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-3.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-3-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-3-dark.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Dark Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-3.html">Home Page 03</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-4.jpg" alt="tolak">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-4.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Multi Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-4-one-page.html" class="tolak-btn demo-one__btn">
                                                                                    <b>One Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-4-dark.html" class="tolak-btn demo-one__btn">
                                                                                    <b>Dark Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-4.html">Home Page 04</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-boxed.jpg" alt="tolak">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-boxed.html" class="tolak-btn demo-one__btn">
                                                                                    <b>View Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-boxed.html">Home Boxed</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/landing/home-rtl.jpg" alt="tolak">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-rtl.html#googtrans(en|ar)" class="tolak-btn demo-one__btn">
                                                                                    <b>View Page</b><span></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-rtl.html#googtrans(en|ar)">Home RTL</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.container -->
                                                    </div><!-- /.demos-one -->
                                                </div><!-- /.megamenu-popup__content -->
                                            </div><!-- /.megamenu-popup -->
                                        </li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="project.html">Our Project</a>
                                            <ul>
                                                <li><a href="project.html">Project Page</a></li>
                                                <li><a href="project-carousel.html">Project Carousel</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="team-carousel.html">Team Carousel</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="reviews.html">Testimonial</a></li>
                                        <li><a href="reviews-carousel.html">Testimonial Carousel</a></li>
                                        <li><a href="packages.html">Pricing Page</a></li>
                                        <li><a href="packages-carousel.html">Pricing Carousel</a></li>
                                        <li>
                                            <a href="gallery.html">Gallery</a>
                                            <ul>
                                                <li><a href="gallery.html">Gallery Masonry</a></li>
                                                <li><a href="gallery-filter.html">Gallery Filter</a></li>
                                                <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                                <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">Services One</a></li>
                                        <li><a href="services-carousel.html">Services One Carousel</a></li>
                                        <li><a href="services-two.html">Services Two</a></li>
                                        <li><a href="services-two-carousel.html">Services Two Carousel</a></li>
                                        <li><a href="business-growth.html">Business of Growth</a></li>
                                        <li><a href="business-solution.html">Solution to Business</a></li>
                                        <li><a href="marketing-solution.html">Markting of Solution</a></li>
                                        <li><a href="technology-services.html">Technology Services</a></li>
                                        <li><a href="business-marketing.html">Marketing Business</a></li>
                                        <li><a href="business-support.html">Support of Business</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown">
                                            <a href="#">Products</a>
                                            <ul class="sub-menu">
                                                <li><a href="products.html">No Sidebar</a></li>
                                                <li><a href="products-left.html">Left Sidebar</a></li>
                                                <li><a href="products-right.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="products-carousel.html">Products Carousel</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown">
                                            <a href="#">News Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">No Sidebar</a></li>
                                                <li><a href="blog-grid-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-grid-right.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">News List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list.html">No Sidebar</a></li>
                                                <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-carousel.html">News Carousel</a></li>
                                        <li class="dropdown">
                                            <a href="#">News Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">No Sidebar</a></li>
                                                <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li class="dot"></li>
                            </ul>
                        </nav><!-- /.main-header__nav -->
                        <div class="main-header__right">
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- /.mobile-nav__toggler -->
                            <a href="#" class="search-toggler main-header__search">
                                <i class="icon-magnifying-glass" aria-hidden="true"></i>
                                <span class="sr-only">Search</span>
                            </a><!-- /.search-toggler -->
                            <a href="cart.html" class="main-header__cart">
                                <i class="icon-shopping-cart" aria-hidden="true"></i>
                                <span class="sr-only">Search</span>
                            </a><!-- /.search-toggler -->
                            <a href="#" class="main-header__toggler">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </a>
                            <a href="contact.html" class="tolak-btn main-header__btn">
                                <b>Discover More</b><span></span>
                            </a><!-- /.thm-btn main-header__btn -->
                        </div><!-- /.main-header__right -->
                    </div><!-- /.main-header__inner -->
                </div><!-- /.container-fluid -->
            </header><!-- /.main-header -->
            <!-- main-slider-start -->
            <section class="main-slider-one">
                <div class="main-slider-one__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "items": 1,
            "autoplay": true,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": false,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "dots": true,
            "margin": 0
            }'>
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                            </div>
                            <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                            <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%" />
                            </svg>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title">Wellcome To It-Solution !</h5><!-- slider-sub-title -->
                                            <h2 class="main-slider-one__title">Get Our Business<br> This It Soluti<span>o</span>n</h2><!-- slider-title -->
                                            <div class="main-slider-one__text">
                                                <p class="main-slider-one__text__one">Business a soluion and emirate in the Arab known <br>for luxury city for Company.</p>
                                            </div><!-- slider-text -->
                                            <div class="main-slider-one__bottom">
                                                <div class="main-slider-one__btn">
                                                    <a href="services.html" class="tolak-btn tolak-btn--base"><b>Contact Now</b><span></span></a><!-- slider-btn -->
                                                </div>
                                                <div class="main-slider-one__social">
                                                    <a href="https://facebook.com">
                                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                        <span class="sr-only">Facebook</span>
                                                    </a>
                                                    <a href="https://pinterest.com">
                                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                        <span class="sr-only">Pinterest</span>
                                                    </a>
                                                    <a href="https://twitter.com">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        <span class="sr-only">Twitter</span>
                                                    </a>
                                                    <a href="https://instagram.com">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                        <span class="sr-only">Instagram</span>
                                                    </a>
                                                </div><!-- slider-social -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-one__floating-text">Tolak</div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                            </div>
                            <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);"></div>
                            <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%" />
                            </svg>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title">Wellcome To It-Solution !</h5><!-- slider-sub-title -->
                                            <h2 class="main-slider-one__title">Get Our Business<br> This It Soluti<span>o</span>n</h2><!-- slider-title -->
                                            <div class="main-slider-one__text">
                                                <p class="main-slider-one__text__one">Business a soluion and emirate in the Arab known <br>for luxury city for Company.</p>
                                            </div><!-- slider-text -->
                                            <div class="main-slider-one__bottom">
                                                <div class="main-slider-one__btn">
                                                    <a href="services.html" class="tolak-btn tolak-btn--base"><b>Contact Now</b><span></span></a><!-- slider-btn -->
                                                </div>
                                                <div class="main-slider-one__social">
                                                    <a href="https://facebook.com">
                                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                        <span class="sr-only">Facebook</span>
                                                    </a>
                                                    <a href="https://pinterest.com">
                                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                        <span class="sr-only">Pinterest</span>
                                                    </a>
                                                    <a href="https://twitter.com">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        <span class="sr-only">Twitter</span>
                                                    </a>
                                                    <a href="https://instagram.com">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                        <span class="sr-only">Instagram</span>
                                                    </a>
                                                </div><!-- slider-social -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-one__floating-text">Tolak</div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                            </div>
                            <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-3.jpg);"></div>
                            <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%" />
                            </svg>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title">Wellcome To It-Solution !</h5><!-- slider-sub-title -->
                                            <h2 class="main-slider-one__title">Get Our Business<br> This It Soluti<span>o</span>n</h2><!-- slider-title -->
                                            <div class="main-slider-one__text">
                                                <p class="main-slider-one__text__one">Business a soluion and emirate in the Arab known <br>for luxury city for Company.</p>
                                            </div><!-- slider-text -->
                                            <div class="main-slider-one__bottom">
                                                <div class="main-slider-one__btn">
                                                    <a href="services.html" class="tolak-btn tolak-btn--base"><b>Contact Now</b><span></span></a><!-- slider-btn -->
                                                </div>
                                                <div class="main-slider-one__social">
                                                    <a href="https://facebook.com">
                                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                        <span class="sr-only">Facebook</span>
                                                    </a>
                                                    <a href="https://pinterest.com">
                                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                        <span class="sr-only">Pinterest</span>
                                                    </a>
                                                    <a href="https://twitter.com">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        <span class="sr-only">Twitter</span>
                                                    </a>
                                                    <a href="https://instagram.com">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                        <span class="sr-only">Instagram</span>
                                                    </a>
                                                </div><!-- slider-social -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-one__floating-text">Tolak</div>
                        </div>
                    </div><!-- item -->
                </div>
                <div class="main-slider-one__project wow fadeInUp" data-wow-delay="200ms">
                    <div class="main-slider-one__project__icon"><span class="icon-check-mark"></span></div>
                    <h5 class="main-slider-one__project__number count-box"><span class="count-text" data-stop="1283" data-speed="1500"></span>k+</h5>
                    <p class="main-slider-one__project__title">Complete Projects</p>
                </div><!-- slider-fact -->
            </section>
            <!-- main-slider-end -->

            <!-- Feature Start -->
            <section class="feature-one">
                <div class="feature-one__bg"></div>
                <div class="container">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Company Status<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">The Success of our Solution</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="row gutter-y-30">
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number"></div>
                                <div class="feature-one__item__icon">
                                    <span class="icon-social-care"></span>
                                </div>
                                <h4 class="feature-one__item__title">IT Consulting</h4>
                                <p class="feature-one__item__text">Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor</p>
                                <div class="feature-one__item__arrow" style="background-image: url(assets/images/shapes/feature-1-shape-1.png);"></div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number"></div>
                                <div class="feature-one__item__icon">
                                    <span class="icon-note-pad"></span>
                                </div>
                                <h4 class="feature-one__item__title">Leadership Work</h4>
                                <p class="feature-one__item__text">Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor</p>
                                <div class="feature-one__item__arrow feature-one__item__arrow--sm-hide" style="background-image: url(assets/images/shapes/feature-1-shape-2.png);"></div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number"></div>
                                <div class="feature-one__item__icon">
                                    <span class="icon-advertisement"></span>
                                </div>
                                <h4 class="feature-one__item__title">Solution Business</h4>
                                <p class="feature-one__item__text">Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor</p>
                                <div class="feature-one__item__arrow" style="background-image: url(assets/images/shapes/feature-1-shape-1.png);"></div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number"></div>
                                <div class="feature-one__item__icon">
                                    <span class="icon-trophy"></span>
                                </div>
                                <h4 class="feature-one__item__title">Business Winner</h4>
                                <p class="feature-one__item__text">Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div><!-- feature-item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature End -->
            <!-- CTA Start -->
            <section class="cta-one">
                <div class="cta-one__bg">
                    <div class="cta-one__bg__shape-left" style="background-image: url(assets/images/shapes/cta-shape-1.png);"></div>
                    <div class="cta-one__bg__shape" style="background-image: url(assets/images/shapes/cta-bg-1.png);"></div>
                </div>
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="cta-one__image">
                                <img src="assets/images/resources/cta-1-1.jpg" alt="tolak">
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                            <div class="cta-one__content">
                                <div class="cta-one__box">
                                    <div class="cta-one__box__icon"><span class="icon-best-price"></span></div>
                                    <h3 class="cta-one__box__title">Solution System Design</h3>
                                    <p class="cta-one__box__text">Every team has a culture and set of ct ations that have either been aed orsve naturally evolved.</p>
                                </div>
                                <div class="cta-one__author">
                                    <img src="assets/images/resources/cta-1-author-1.jpg" alt="tolak">
                                    <img src="assets/images/resources/cta-1-author-2.jpg" alt="tolak">
                                    <img src="assets/images/resources/cta-1-author-3.jpg" alt="tolak">
                                    <a class="cta-one__author__rm" href="contact.html">More <span class="fas fa-arrow-right"></span></a>
                                </div>
                                <p class="cta-one__content__text">29,0000 customers with our services <a href="contact.html">( Let’s Started )</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CTA End -->
            <!-- Service Start -->
            <section class="service-one">
                <div class="container">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Best Service<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">We Kinds of Services Business</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="assets/images/resources/service-1-1.jpg" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-cooperation"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="business-growth.html">Business of Growth</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                        We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                    </p><!-- /.service-text -->
                                </div>
                                <div class="service-one__item__bottom">
                                    <div class="service-one__item__bottom__number"></div>
                                    <a class="service-one__item__bottom__rm" href="business-growth.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="150ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="assets/images/resources/service-1-2.jpg" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-ads-campaign"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="business-solution.html">Solution to Business</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                        We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                    </p><!-- /.service-text -->
                                </div>
                                <div class="service-one__item__bottom">
                                    <div class="service-one__item__bottom__number"></div>
                                    <a class="service-one__item__bottom__rm" href="business-solution.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="assets/images/resources/service-1-3.jpg" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-headhunter"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="marketing-solution.html">Markting of Solution</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                        We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                    </p><!-- /.service-text -->
                                </div>
                                <div class="service-one__item__bottom">
                                    <div class="service-one__item__bottom__number"></div>
                                    <a class="service-one__item__bottom__rm" href="marketing-solution.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="250ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="assets/images/resources/service-1-4.jpg" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-agency"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="technology-services.html">Technology Services</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                        We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                    </p><!-- /.service-text -->
                                </div>
                                <div class="service-one__item__bottom">
                                    <div class="service-one__item__bottom__number"></div>
                                    <a class="service-one__item__bottom__rm" href="technology-services.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="assets/images/resources/service-1-5.jpg" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-advertisig-agency"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="business-marketing.html">Marketing Business</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                        We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                    </p><!-- /.service-text -->
                                </div>
                                <div class="service-one__item__bottom">
                                    <div class="service-one__item__bottom__number"></div>
                                    <a class="service-one__item__bottom__rm" href="business-marketing.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div><!-- /.service-card-one -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="350ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="assets/images/resources/service-1-6.jpg" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-management"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="business-support.html">Support of Business</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                        We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                    </p><!-- /.service-text -->
                                </div>
                                <div class="service-one__item__bottom">
                                    <div class="service-one__item__bottom__number"></div>
                                    <a class="service-one__item__bottom__rm" href="business-support.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div><!-- /.service-card-one -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service End -->
            <section class="about-one">
                <div class="about-one__bg" style="background-image: url(assets/images/shapes/about-bg-1.jpg);"></div>
                <div class="about-one__shape" style="background-image: url(assets/images/shapes/about-1-shape-1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="about-one__content">
                                <div class="sec-title text-left">
                                    <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span> Our About Now<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title">We Can Clients with the<br> About Services</h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="about-one__content__text">
                                    Business tailored it design, management & support services<br> business agency elit, sed do eiusmod tempor.
                                </p>
                                <ul class="about-one__content__list">
                                    <li><span class="icofont-checked"></span>
                                        <p>Business onstructivism.</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>We give management</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>Media in this solution.</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>Business onstructivism.</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>We give management</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>Media in this solution.</p>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="about-one__content__btn">
                                    <a href="about.html" class="tolak-btn"><b>About More</b><span></span></a>
                                    <h5 class="about-one__content__btn__text">Watching video</h5>
                                    <img class="about-one__content__btn__arrow" src="assets/images/shapes/arrow.png" alt="tolak">
                                </div>
                                <div class="about-one__video-btn">
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="fa fa-play"></i>
                                        <span class="video-popup__btn-ripple"></span>
                                    </a>
                                </div>
                            </div><!-- /.about__content -->
                        </div><!-- /.col-xl-6 -->
                        <div class="col-xl-6">
                            <div class="tolak-stretch-element-inside-column">
                                <div class="about-one__image wow slideInRight">
                                    <img src="assets/images/resources/about-1-1.jpg" alt="tolak">
                                    <div class="about-one__image__text">
                                        <span></span>36+ expressions challenge
                                    </div>
                                </div><!-- /.about__image -->
                            </div><!-- /.tolak-stretch-element-inside-column -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.about-one -->
            <section class="funfact-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="funfact-one__image">
                                <img src="assets/images/resources/counter-1-1.jpg" alt="tolak">
                                <img class="funfact-one__image__shape" src="assets/images/shapes/counter-border-1.png" alt="tolak">
                                <div class="funfact-one__item count-box tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'>
                                    <h3 class="funfact-one__item__count"><span class="count-text" data-stop="63" data-speed="1500"></span>k+</h3><!-- /.funfact-one__number -->
                                    <p class="funfact-one__item__text">Successflly Trained</p><!-- /.funfact-one__title -->
                                </div><!-- /.funfact-one__item -->
                                <div class="funfact-one__item funfact-one__item--two count-box tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'>
                                    <h3 class="funfact-one__item__count"><span class="count-text" data-stop="26" data-speed="1500"></span>k+</h3><!-- /.funfact-one__number -->
                                    <p class="funfact-one__item__text">Projects Complited</p><!-- /.funfact-one__title -->
                                </div><!-- /.funfact-one__item -->
                                <div class="funfact-one__item funfact-one__item--three count-box tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'>
                                    <h3 class="funfact-one__item__count"><span class="count-text" data-stop="34" data-speed="1500"></span>k+</h3><!-- /.funfact-one__number -->
                                    <p class="funfact-one__item__text">Customers Support</p><!-- /.funfact-one__title -->
                                </div><!-- /.funfact-one__item -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="funfact-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>
                                            <i class="fa fa-check-circle"></i>
                                            Maecenas facilisis erat id odio
                                            <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                                by injected humour,
                                            </p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>
                                            <i class="fa fa-check-circle"></i>
                                            Phasellus et vehicula nulla
                                            <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                                by injected humour,
                                            </p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>
                                            <i class="fa fa-check-circle"></i>
                                            Maecenas malesuada
                                            <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                                by injected humour,
                                            </p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>
                                            <i class="fa fa-check-circle"></i>
                                            Why you join our team
                                            <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                                by injected humour,
                                            </p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>
                                            <i class="fa fa-check-circle"></i>
                                            Maecenas malesuada
                                            <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                                by injected humour,
                                            </p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                            </div>
                        </div><!-- /.col-lg-6 -->
                    </div>
                </div><!-- /.container -->
            </section><!-- /.funfact-one -->
            <!-- CTA Start -->
            <section class="cta-two">
                <div class="cta-two__shape" style="background-image: url(assets/images/shapes/cta-shape-1.png);"></div>
                <div class="container">
                    <div class="cta-two__bg" style="background-image: url(assets/images/shapes/cta-bg-2.png);">
                        <div class="row">
                            <div class="col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                                <div class="cta-two__info" style="background-image: url(assets/images/shapes/cta-2-1.jpg);">
                                    <div class="cta-two__info__icon"><span class="icon-phone-call"></span></div>
                                    <h4 class="cta-two__info__title">Call This Now</h4>
                                    <p class="cta-two__info__text">
                                        <a href="tel:025461556695">+025461556695</a>
                                        <a href="tel:826542556455">+826542556455</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cta-two__content">
                                    <h4 class="cta-two__content__title">Solution Company <a href="tel:025461556695">Call Now!</a></h4>
                                    <p class="cta-two__content__text">We can provide you with a reliable<br> Please input an email address</p>
                                    <a class="cta-two__content__rm" href="contact.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="cta-two__image">
                                    <img src="assets/images/resources/cta-2-2.png" alt="tolak">
                                </div>
                                <a href="tel:025461556695" class="cta-two__call-text">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CTA End -->
            <section class="team-one">
                <div class="container">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Team Member<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Meet Great Customer Service</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="team-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    }
                }
                }'>
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Lorata Barsa">
                                </div><!-- /.team-card__image -->
                                <div class="team-card__content">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
                                            <i class="fa fa-plus"></i>
                                            <div class="team-card__social__list">
                                                <a href="https://facebook.com">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                                <a href="https://pinterest.com">
                                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                    <span class="sr-only">Pinterest</span>
                                                </a>
                                                <a href="https://twitter.com">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                                <a href="https://instagram.com">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            </div><!-- /.team-card__social__list -->
                                        </div><!-- /.team-card__social -->
                                    </div><!-- /.team-card__hover -->
                                    <h3 class="team-card__title">
                                        <a href="team-details.html">Lorata Barsa</a>
                                    </h3><!-- /.team-card__title -->
                                    <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                                </div><!-- /.team-card__content -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Moras Batas">
                                </div><!-- /.team-card__image -->
                                <div class="team-card__content">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
                                            <i class="fa fa-plus"></i>
                                            <div class="team-card__social__list">
                                                <a href="https://facebook.com">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                                <a href="https://pinterest.com">
                                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                    <span class="sr-only">Pinterest</span>
                                                </a>
                                                <a href="https://twitter.com">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                                <a href="https://instagram.com">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            </div><!-- /.team-card__social__list -->
                                        </div><!-- /.team-card__social -->
                                    </div><!-- /.team-card__hover -->
                                    <h3 class="team-card__title">
                                        <a href="team-details.html">Moras Batas</a>
                                    </h3><!-- /.team-card__title -->
                                    <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                                </div><!-- /.team-card__content -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-3.jpg" alt="Korata Mana">
                                </div><!-- /.team-card__image -->
                                <div class="team-card__content">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
                                            <i class="fa fa-plus"></i>
                                            <div class="team-card__social__list">
                                                <a href="https://facebook.com">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                                <a href="https://pinterest.com">
                                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                    <span class="sr-only">Pinterest</span>
                                                </a>
                                                <a href="https://twitter.com">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                                <a href="https://instagram.com">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            </div><!-- /.team-card__social__list -->
                                        </div><!-- /.team-card__social -->
                                    </div><!-- /.team-card__hover -->
                                    <h3 class="team-card__title">
                                        <a href="team-details.html">Korata Mana</a>
                                    </h3><!-- /.team-card__title -->
                                    <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                                </div><!-- /.team-card__content -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Lorata Barsa">
                                </div><!-- /.team-card__image -->
                                <div class="team-card__content">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
                                            <i class="fa fa-plus"></i>
                                            <div class="team-card__social__list">
                                                <a href="https://facebook.com">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                                <a href="https://pinterest.com">
                                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                    <span class="sr-only">Pinterest</span>
                                                </a>
                                                <a href="https://twitter.com">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                                <a href="https://instagram.com">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            </div><!-- /.team-card__social__list -->
                                        </div><!-- /.team-card__social -->
                                    </div><!-- /.team-card__hover -->
                                    <h3 class="team-card__title">
                                        <a href="team-details.html">Lorata Barsa</a>
                                    </h3><!-- /.team-card__title -->
                                    <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                                </div><!-- /.team-card__content -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Moras Batas">
                                </div><!-- /.team-card__image -->
                                <div class="team-card__content">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
                                            <i class="fa fa-plus"></i>
                                            <div class="team-card__social__list">
                                                <a href="https://facebook.com">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                                <a href="https://pinterest.com">
                                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                    <span class="sr-only">Pinterest</span>
                                                </a>
                                                <a href="https://twitter.com">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                                <a href="https://instagram.com">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            </div><!-- /.team-card__social__list -->
                                        </div><!-- /.team-card__social -->
                                    </div><!-- /.team-card__hover -->
                                    <h3 class="team-card__title">
                                        <a href="team-details.html">Moras Batas</a>
                                    </h3><!-- /.team-card__title -->
                                    <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                                </div><!-- /.team-card__content -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-3.jpg" alt="Korata Mana">
                                </div><!-- /.team-card__image -->
                                <div class="team-card__content">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
                                            <i class="fa fa-plus"></i>
                                            <div class="team-card__social__list">
                                                <a href="https://facebook.com">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                                <a href="https://pinterest.com">
                                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                    <span class="sr-only">Pinterest</span>
                                                </a>
                                                <a href="https://twitter.com">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                                <a href="https://instagram.com">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            </div><!-- /.team-card__social__list -->
                                        </div><!-- /.team-card__social -->
                                    </div><!-- /.team-card__hover -->
                                    <h3 class="team-card__title">
                                        <a href="team-details.html">Korata Mana</a>
                                    </h3><!-- /.team-card__title -->
                                    <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                                </div><!-- /.team-card__content -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.team-one -->
            <section class="our-solution" style="background-image: url(assets/images/backgrounds/solution-bg-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="our-solution__image">
                                <div class="our-solution__border-one"></div>
                                <div class="our-solution__border-two"></div>
                                <img src="assets/images/resources/solution-1-1.png" alt="tolak">
                                <div class="our-solution__border-three"></div>
                                <div class="our-solution__image__shape"><img src="assets/images/shapes/solution-1-shape-1.png" alt="tolak"></div>
                            </div><!-- /.our-solution__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="our-solution__content">
                                <div class="sec-title text-left">
                                    <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Solution Business<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title">We’re Are Commited Deliver Marketing for Business.</h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="our-solution__content__text">
                                    Business tailored it design, management & support services business agency elit, sed do eiusmod tempor.
                                </p>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-4">
                                        <div class="our-solution__box">
                                            <div class="our-solution__box__icon"><span class="icon-social-care"></span></div>
                                            <p class="our-solution__box__text">
                                                THIS BEST MANS SOLUTION BEST BUSINESS FOR PROVED IS TO COMPANY
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-7 col-md-6">
                                        <div class="our-solution__list">
                                            <h5 class="our-solution__list__title">Solution This Business</h5>
                                            <ul>
                                                <li><span class="fas fa-check-circle"></span>We provide a revolutionary</li>
                                                <li><span class="fas fa-check-circle"></span>This man for it solution.</li>
                                                <li><span class="fas fa-check-circle"></span>We provide a revolutionary</li>
                                                <li><span class="fas fa-check-circle"></span>This man for it solution.</li>
                                            </ul>
                                            <div class="our-solution__list__border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.our-solution -->
            <!-- Feature Start -->
            <section class="feature-two">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-two__item text-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="feature-two__item__icon">
                                    <span class="icon-cooperation"></span>
                                </div>
                                <h4 class="feature-two__item__title">Business Of Growth</h4>
                                <p class="feature-two__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-two__item feature-two__item--reverse text-center wow fadeInUp" data-wow-delay="200ms">
                                <div class="feature-two__item__icon">
                                    <span class="icon-ads-campaign"></span>
                                </div>
                                <h4 class="feature-two__item__title">We Grow Business</h4>
                                <p class="feature-two__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-two__item text-center wow fadeInUp" data-wow-delay="300ms">
                                <div class="feature-two__item__icon">
                                    <span class="icon-advertisig-agency"></span>
                                </div>
                                <h4 class="feature-two__item__title">Markting Solution</h4>
                                <p class="feature-two__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                            </div><!-- feature-item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature End -->
            <section class="project-one">
                <div class="container">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Projects Work<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Work Explore Satisfied Customers</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="project-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 30,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 2
                    },
                    "1200": {
                        "items": 3
                    },
                    "1600": {
                        "items": 4
                    }
                }
                }'>
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-1.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Solution</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-2.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Business</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-3.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Marketing</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-4.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Software</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-1.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Solution</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-2.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Business</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-3.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Marketing</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-one__item">
                                <div class="project-one__image">
                                    <img src="assets/images/project/project-1-4.jpg" alt="tolak">
                                </div>
                                <div class="project-one__hover">
                                    <a class="project-one__read-more" href="project-details.html"><span class="icon-right-arrow"></span></a>
                                    <div class="project-one__hover-bottom">
                                        <div class="project-one__cats"><a href="project.html">Software</a></div>
                                        <h3 class="project-one__title"><a href="project-details.html">Technology website development</a></h3>
                                    </div>
                                </div>
                            </div><!-- /.project-one__item -->
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.project-one -->

            <div class="client-carousel no-border">
                <div class="container">
                    <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 5,
                "margin": 30,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "360":{
                        "items":2
                    },
                    "575":{
                        "items":3
                    },
                    "768":{
                        "items":3
                    },
                    "992":{
                        "items": 4
                    },
                    "1200":{
                        "items": 5
                    }
                }
                }'>
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png" alt="tolak">
                            <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png" alt="tolak">
                        </div><!-- /.owl-slide-item-->
                    </div><!-- /.thm-owl__slider -->
                </div><!-- /.container -->
            </div><!-- /.client-carousel -->
            <section class="slide-text">
                <div class="slide-text__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/slide-text-bg.jpg);"></div>
                <div class="slide-text__wrap">
                    <ul class="slide-text__list list-unstyled">
                        <li>Service</li>
                        <li>Technology</li>
                        <li>Business</li>
                        <li>Consultancy</li>
                        <li>Support</li>
                        <li>Management</li>
                        <li>Design</li>
                        <li>Development</li>
                        <li>Service</li>
                        <li>Technology</li>
                        <li>Business</li>
                        <li>Consultancy</li>
                        <li>Support</li>
                        <li>Management</li>
                        <li>Design</li>
                        <li>Development</li>
                    </ul>
                </div>
            </section>

            <section class="contact-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="contact-one__info wow fadeInLeft" data-wow-delay="100ms">
                                <div class="contact-one__info__icon"><span class="icon-customer-service"></span></div>
                                <h3 class="contact-one__info__title">Let’s call together just <span>contact</span> line</h3>
                                <p class="contact-one__info__text"><a href="tel:255225551">++255225551</a>, <a href="tel:6544144444">+6544144444</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-one__image wow fadeInRight" data-wow-delay="200ms">
                                <img src="assets/images/resources/contact-1-1.png" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
                <div class="container contact-one__container wow fadeInUp" data-wow-delay="100ms">
                    <div class="contact-one__wrapper" style="background-image: url(assets/images/shapes/contact-1-shape-1.png);">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-one__image-two">
                                    <img src="assets/images/resources/contact-1-2.jpg" alt="tolak">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-one__content">
                                    <div class="sec-title text-left">
                                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Get In Contact<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                                        <h3 class="sec-title__title">Get free Business touch Customers me.</h3><!-- /.sec-title__title -->
                                    </div><!-- /.sec-title -->
                                    <p class="contact-one__content__text">
                                        Business tailored it design, management & support services <br>business agency elit, sed do eiusmod tempor.
                                    </p>
                                    <form class="contact-one__form contact-form-validated form-one" action="inc/sendemail.php">
                                        <div class="form-one__group">
                                            <div class="form-one__control">
                                                <input type="text" name="name" placeholder="Your Name">
                                            </div><!-- /.form-one__control -->
                                            <div class="form-one__control">
                                                <input type="email" name="email" placeholder="Email address">
                                            </div><!-- /.form-one__control -->
                                            <div class="form-one__control form-one__control--full">
                                                <textarea name="message" placeholder="Message"></textarea><!-- /# -->
                                            </div><!-- /.form-one__control -->
                                            <div class="form-one__control form-one__control--full">
                                                <button type="submit" class="tolak-btn"><b>Send Request</b><span></span></button>
                                            </div><!-- /.form-one__control -->
                                        </div><!-- /.form-one__group -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section><!-- /.contact -->

            <section class="blog-one">
                <div class="container">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our LArgest Blog<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Latest News From The Blog</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="blog-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 30,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 2
                    },
                    "992": {
                        "items": 3
                    }
                }
                }'>
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Solution This Business For is Marketing Blog">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Solution This Business For is Marketing Blog">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>15</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-2.png" alt="Business Rules of Running to Web Solution">
                                    <img src="assets/images/blog/blog-1-2.png" alt="Business Rules of Running to Web Solution">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Business Rules of Running to Web Solution</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>19</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-3.png" alt="We Should be Descriptive This Business">
                                    <img src="assets/images/blog/blog-1-3.png" alt="We Should be Descriptive This Business">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">We Should be Descriptive This Business</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>26</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">We Should be Descriptive This Business</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Solution This Business For is Marketing Blog">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Solution This Business For is Marketing Blog">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>15</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-2.png" alt="Business Rules of Running to Web Solution">
                                    <img src="assets/images/blog/blog-1-2.png" alt="Business Rules of Running to Web Solution">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Business Rules of Running to Web Solution</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>19</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-3.png" alt="We Should be Descriptive This Business">
                                    <img src="assets/images/blog/blog-1-3.png" alt="We Should be Descriptive This Business">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">We Should be Descriptive This Business</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>26</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">We Should be Descriptive This Business</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Solution This Business For is Marketing Blog">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Solution This Business For is Marketing Blog">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>15</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-2.png" alt="Business Rules of Running to Web Solution">
                                    <img src="assets/images/blog/blog-1-2.png" alt="Business Rules of Running to Web Solution">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Business Rules of Running to Web Solution</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>19</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-1-3.png" alt="We Should be Descriptive This Business">
                                    <img src="assets/images/blog/blog-1-3.png" alt="We Should be Descriptive This Business">
                                    <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">We Should be Descriptive This Business</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__bg"></div>
                                <div class="blog-card__meta">
                                    <div class="blog-card__meta__date"><span>26</span>Jun</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                    <div class="blog-card__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="blog-details-right.html">We Should be Descriptive This Business</a></h3><!-- /.blog-card__title -->
                                    <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                    <a href="blog-details-right.html" class="blog-card__link">
                                        Read more
                                        <i class="icofont-rounded-double-right"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.blog-card__content -->
                                <div class="blog-card__border"></div>
                            </div><!-- /.blog-card -->
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.blog-one -->

            <section class="mail-section">
                <div class="container">
                    <div class="mail-section__wrapper">
                        <div class="row">
                            <div class="col-md-12 col-lg-4"></div>
                            <div class="col-md-5 col-lg-3">
                                <div class="mail-section__content">
                                    <h3 class="mail-section__content__title">Our Newsletter</h3>
                                    <p class="mail-section__content__text">We are dolor sit amet csectetur</p>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-5">
                                <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-section__newsletter mc-form">
                                    <input type="text" name="EMAIL" placeholder="Enter your email">
                                    <button type="submit" class="tolak-btn">
                                        <b>Subscribe</b><span></span>
                                        <span class="sr-only">Subscribe</span><!-- /.sr-only -->
                                    </button>
                                </form><!-- /.footer-widget__newsletter mc-form -->
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="main-footer background-black">
                <div class="main-footer__bg background-black" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
                <!-- /.main-footer__bg -->
                <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-shape-1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget footer-widget--about">
                                <a href="index.html" class="footer-widget__logo">
                                    <img src="assets/images/logo-light.png" width="184" alt="Tolak HTML Template">
                                </a>
                                <ul class="footer-widget__info">
                                    <li><span class="icofont-clock-time"></span>Open Hours of Government:<br> Mon - Fri: 8.00 am. - 6.00 pm.</li>
                                    <li><span class="icofont-location-pin"></span>13/A, Miranda Halim City .</li>
                                    <li><span class="icofont-phone"></span><a href="tel:09969569535">099 695 695 35</a></li>
                                </ul>
                                <div class="footer-widget__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div>
                                <div class="footer-widget__image">
                                    <img src="assets/images/resources/footer-about.jpg" alt="tolak">
                                </div>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget footer-widget--posts">
                                <h2 class="footer-widget__title">Recent Posts</h2><!-- /.footer-widget__title -->
                                <ul class="footer-widget__posts list-unstyled">
                                    <li class="footer-widget__posts__item">
                                        <div class="footer-widget__posts__image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="footer-widget__posts__content">
                                            <p class="footer-widget__posts__meta">23 jun 2023</p><!-- /.sidebar__posts__date -->
                                            <h4 class="footer-widget__posts__title"><a href="blog-details.html">We round Solution york Blog</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                    <li class="footer-widget__posts__item">
                                        <div class="footer-widget__posts__image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="footer-widget__posts__content">
                                            <p class="footer-widget__posts__meta">23 jun 2023</p><!-- /.sidebar__posts__date -->
                                            <h4 class="footer-widget__posts__title"><a href="blog-details.html">We Should be Descriptive</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                </ul><!-- /.sidebar__posts list-unstyled -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget footer-widget--links">
                                <h2 class="footer-widget__title">Service</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="about.html">Why choose us</a></li>
                                    <li><a href="services.html">Our Service</a></li>
                                    <li><a href="reviews.html">Partners</a></li>
                                    <li><a href="contact.html">Core values</a></li>
                                    <li><a href="project.html">Our projects</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget footer-widget--links footer-widget--last">
                                <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="packages.html">Packages</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog-grid-right.html">News</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
                <div class="main-footer__bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="main-footer__copyright">
                                    &copy; Copyright <span class="dynamic-year"></span> by Tolak HTML Template.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled main-footer__bottom__list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog-list-right.html">News</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                </ul><!-- /.list-unstyled -->
                            </div>
                        </div><!-- /.main-footer__inner -->
                    </div><!-- /.container -->
                </div><!-- /.main-footer__bottom -->
            </footer><!-- /.main-footer -->

        </div><!-- /.page-wrapper -->



        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@tolak.com">needhelp@tolak.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__social">
                    <a href="https://facebook.com">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://pinterest.com">
                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                        <span class="sr-only">Pinterest</span>
                    </a>
                    <a href="https://twitter.com">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://instagram.com">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div><!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->
        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form role="search" method="get" class="search-popup__form" action="#">
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="tolak-btn">
                        <b><i class="icon-magnifying-glass"></i></b><span></span>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->
        <!-- Sidebar One Start -->
        <aside class="sidebar-one">
            <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
            <div class="sidebar-one__content">
                <div class="sidebar-one__close"><i class="icon-close"></i></div><!-- /.siderbar-close -->
                <div class="sidebar-one__logo">
                    <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" alt="Tolak HTML" width="184"></a>
                </div><!-- /.sidebar-one__logo-box -->
                <p class="sidebar-one__text">
                    Mauris ut enim sit amet lacus ornare ullamcor. Praesent placerat nequ
                    puru rhoncu tincidunt odio ultrices. Sed feugiat feugiat felis.
                </p>
                <h4 class="sidebar-one__title">Contact Info:</h4>
                <ul class="sidebar-one__info">
                    <li>
                        <span class="fas fa-map-marker-alt"></span>
                        27, Dhaka London City Dhaka, Bangladesh
                    </li>
                    <li>
                        <span class="fas fa-clock"></span>
                        Mon - Fri: 8.00 am. - 6.00 pm.
                    </li>
                    <li>
                        <span class="fas fa-envelope"></span>
                        <a href="tel:09969569535">099 695 695 35</a>
                    </li>
                </ul>
                <div class="sidebar-one__social">
                    <a href="https://facebook.com">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://pinterest.com">
                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                        <span class="sr-only">Pinterest</span>
                    </a>
                    <a href="https://twitter.com">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://instagram.com">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div><!-- /sidebar-one__socila -->
                <h4 class="sidebar-one__title">Newsletter:</h4>
                <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
                    <input type="text" name="EMAIL" placeholder="Email address">
                    <button type="submit" class="fas fa-paper-plane">
                        <span class="sr-only">submit</span><!-- /.sr-only -->
                    </button>
                </form><!-- /.footer-widget__newsletter mc-form -->
            </div><!-- /.sidebar__content -->
        </aside>
        <!-- Sidebar One Start -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>


        <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
        <script src="{{ asset('assets/vendors/tilt/tilt.jquery.js') }}"></script>
        <script src="{{ asset('assets/vendors/simpleParallax/simpleParallax.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
        <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/progress-bar/knob.js') }}"></script>

        <!-- chart js -->
        <script src="{{ asset('assets/vendors/chart/chart.js') }}"></script>
        <script src="{{ asset('assets/vendors/chart/custome-chart.js') }}"></script>

        <!-- template js -->
        <script src="{{ asset('assets/js/tolak.js') }}"></script>
    </body>
</html>