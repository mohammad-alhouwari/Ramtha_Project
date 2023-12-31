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
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/govity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/govity-responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <style>
        /* Color of the links BEFORE scroll */
        .navbar-scroll .nav-link,
        .navbar-scroll .fa-bars,
        .navbar-scroll .navar-brand {
            color: #4f4f4f;
        }

        .navbar-scroll .nav-link:hover {
            color: #1266f1;
        }

        /* Color of the links AFTER scroll */
        .navbar-scrolled .nav-link,
        .navbar-scrolled .fa-bars,
        .navbar-scrolled .navar-brand {
            color: #4f4f4f;
        }

        /* Color of the navbar AFTER scroll */
        .navbar-scroll,
        .navbar-scrolled {
            background-color: #fff;
        }

        /* An optional height of the navbar AFTER scroll */
        .navbar.navbar-scroll.navbar-scrolled {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    </style>

</head>

<body class="custom-cursor">

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-headercontent"></div><!-- /.sticky-headercontent -->
    </div><!-- /.stricky-header -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
        <div class="container">
            @if (isset($municipalityInfo))
                <img src="{{ asset($municipalityInfo->logo) }}" alt="" width="100px">
            @endif
            <button class="navbar-toggler ps-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownNews" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            عن البلدية
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownNews">
                            <a class="dropdown-item {{ request()->routeIs('about-municipality') ? 'about-municipality' : '' }}"
                                href="/about-municipality">نبذة عن البلدية</a>
                            <a class="dropdown-item" href="/president">كلمة الرئيس</a>
                            <a class="dropdown-item" href="/organizational-chart">الهيكل
                                التنظيمي</a>
                            <a class="dropdown-item" href="/about-municipality">الأعضاء</a>
                            <!-- Add more categories as needed -->
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownNews" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المركز الاعلامي
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownNews">
                            <a class="dropdown-item" href="/news">الأخبار</a>
                            <a class="dropdown-item" href="/events">الفعاليات</a>
                            <a class="dropdown-item" href="/gallery">معرض الصور</a>

                            <!-- Add more categories as needed -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المشاريع والعطاءات
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownNews">
                            <a class="dropdown-item" href="/projects">المشاريع</a>
                            <a class="dropdown-item" href="/tenders">العطاءات</a>
                            <a class="dropdown-item" href="/investments">الفرص
                                الاستثمارية</a>
                            <a class="dropdown-item" href="/jobs">فرص العمل</a>
                            <!-- Add more categories as needed -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            رأيكم يهمنا
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownNews">
                            <a class="dropdown-item" href="/complains">شكاوي واقتراحات</a>
                            <a class="dropdown-item" href="/suggestions">افكار و مبادرات</a>
                            <a class="dropdown-item" href="/polls">استطلاعات الرأي</a>

                            <!-- Add more categories as needed -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/landmarks">اهم المعالم</a>
                    </li>

                </ul>

                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="https://www.facebook.com/ramtha.municipality/?locale=ar_AR7">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="https://twitter.com/RamthaMunic?t=ghT4dCI8RjTwi_OZ1tgrUg&s=09">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2" href="https://youtube.com/@RamthaMunic?si=TQJjj1Upu3KRic6X">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    @if (isset($municipalityInfo))
                        <li class="nav-item">

                            <a class="nav-link ps-2" href="tel:{{ $municipalityInfo->phone }}">
                                <i class="fas fa-phone"></i>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2" href="mailto:{{ $municipalityInfo->email }}">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (!request()->is('/') && !request()->is('team'))
        <!-- Page Header Start -->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('assets/images/HeroSection.jpg') }})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled" style="padding-inline-start:0px">
                        <h2>@yield('header_title')</h2>
                        <li><a href="{{ url('/') }}">الرئيسية</a></li>
                        <li><span>/</span></li>
                        <li class="header-size">@yield('header_title')</li>
                    </ul>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <!-- Page Header End -->
    @endif
