<!DOCTYPE html>
<html lang="ar" dir="rtl">


<!-- Mirrored from layerdrops.com/govity/main-html/index-one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 09:16:05 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/ramtha-logo-rbg.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/ramtha-logo-rbg.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/ramtha-logo-rbg.png') }}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="بلدية الرمثا الكبرى " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/govity-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/govity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/govity-responsive.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">

                        <div class="main-menu__top">
                            <div class="main-menu__top-inner">
                                <div class="main-menu__top-left">
                                    <div class="main-menu__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="main-menu__top-right">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="text">
                                                <p>Open hours: Mon - Fri 8.00 am - 6.00 pm</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled main-menu__top-menu">
                                        <li><a href="about.html">Council</a></li>
                                        <li><a href="about.html">Government</a></li>
                                        <li><a href="contact.html">Complaints</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__bottom">
                            <div class="main-menu__bottom-inner">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list one-page-scroll-menu">
                                        <li class="dropdown current megamenu scrollToLink">
                                            <a href="#home">Home </a>
                                            <ul>
                                                <li>
                                                    <section class="home-showcase">
                                                        <div class="container">
                                                            <div class="home-showcase__inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index.html"
                                                                                        class="thm-btn home-showcase__buttons__item">Multi
                                                                                        Page</a>
                                                                                    <a href="index-one-page.html"
                                                                                        class="thm-btn home-showcase__buttons__item">One
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                01</h3>
                                                                            <!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index2.html"
                                                                                        class="thm-btn home-showcase__buttons__item">Multi
                                                                                        Page</a>
                                                                                    <a href="index2-one-page.html"
                                                                                        class="thm-btn home-showcase__buttons__item">One
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                02
                                                                            </h3><!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index3.html"
                                                                                        class="thm-btn home-showcase__buttons__item">Multi
                                                                                        Page</a>
                                                                                    <a href="index3-one-page.html"
                                                                                        class="thm-btn home-showcase__buttons__item">One
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                03
                                                                            </h3><!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-3">
                                                                        <div class="home-showcase__item">
                                                                            <div class="home-showcase__image">
                                                                                <img src="assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-dark.html"
                                                                                        class="thm-btn home-showcase__buttons__item">View
                                                                                        Page</a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                            <h3 class="home-showcase__title">Home
                                                                                Page
                                                                                04
                                                                            </h3><!-- /.home-showcase__title -->
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                </div><!-- /.row -->
                                                            </div><!-- /.home-showcase__inner -->

                                                        </div><!-- /.container -->
                                                    </section>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#about">About</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#services">Services</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#team">Team</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#events">Events</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#news">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__right">
                                    <div class="main-menu__call">
                                        <div class="main-menu__call-icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="main-menu__call-content">
                                            <p class="main-menu__call-sub-title">Call Anytime</p>
                                            <h5 class="main-menu__call-number"><a href="tel:9212340800">+92 (1234)
                                                    0800</a></h5>
                                        </div>
                                    </div>
                                    <div class="main-menu__search-box">
                                        <a href="#"
                                            class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                    </div>


                                </div>
                                <div class="">
                                    <img style="width: 100px" src="assets/images/backgrounds/logoload.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
