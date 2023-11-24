@extends('Layout.master')
@section('title', 'بلدية الرمثا')
@section('content')

    <!-- Main Slider Three Start -->
    <section class="main-slider-three" lang="en" dir="ltr">
        <div class="main-slider-three__carousel owl-carousel owl-theme thm-owl__carousel" lang="en" dir="ltr"
            data-owl-options='{"loop": false, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>" ], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 3000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            {{-- <div class="item main-slider-three__slide-1">
                <div class="main-slider-three__bg" style="background: url(assets/images/backgrounds/Just1.jpg); width: 100%">
                </div><!-- /.slider-one__bg -->
                <div class="container" dir="rtl">
                    <div class="main-slider-three__content">
                        <h2 class="main-slider-three__title">بلدية
                            <br> مدينة الرمثا
                        </h2>
                        <p class="main-slider-three__sub-title">يمكنك العثور على الوظائف والأقسام والأحداث واستكشافها وغير
                            ذلك الكثير.</p>
                        <div class="main-slider-three__btn-box">
                            <a href="about.html" class="main-slider-three__btn thm-btn">اكتشف المزيد</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="item main-slider-three__slide-2">
                <div class="main-slider-three__bg" style="background: url(assets/images/backgrounds/stad.png) no-repeat;">
                </div><!-- /.slider-one__bg -->
                <div class="container" dir="rtl">
                    <div class="main-slider-three__content">
                        <h2 class="main-slider-three__title">بلدية
                            <br> مدينة الرمثا
                        </h2>
                        <p class="main-slider-three__sub-title">يمكنك العثور على الوظائف والأقسام والأحداث واستكشافها
                            وغير ذلك الكثير.</p>
                        <div class="main-slider-three__btn-box">
                            <a href="about.html" class="main-slider-three__btn thm-btn">اكتشف المزيد</a>
                        </div>
                        <div class="main-slider-three__weather-box">
                            <ul class="main-slider-three__weather-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-sun-day-weather-symbol"></span>
                                    </div>
                                    <div class="text">
                                        <span>درجة</span>
                                        <p>32 0C / 65 0F</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="text">
                                        <span>الوقت</span>
                                        <p id="current-time"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider-three__slide-3">
                <div class="main-slider-three__bg"
                    style="background: url(assets/images/backgrounds/dowar.jpg) contain; width: 100%">
                </div><!-- /.slider-one__bg -->
                <div class="container" dir="rtl">
                    <div class="main-slider-three__content">
                        <h2 class="main-slider-three__title">بلدية
                            <br> مدينة الرمثا
                        </h2>
                        <p class="main-slider-three__sub-title">يمكنك العثور على الوظائف والأقسام والأحداث واستكشافها
                            وغير ذلك الكثير.</p>
                        <div class="main-slider-three__btn-box">
                            <a href="about.html" class="main-slider-three__btn thm-btn" dir="rtl">اكتشف المزيد</a>
                        </div>
                        <div class="main-slider-three__weather-box">
                            <ul class="main-slider-three__weather-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-sun-day-weather-symbol"></span>
                                    </div>
                                    <div class="text">
                                        <span>درجة الحرارة</span>
                                        <p>32 0C / 65 0F</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="text">
                                        <span>الوقت</span>
                                        <p>09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Main Slider Three Start -->

    <br>
    <br>

    <section class="services-two">
        <div class="services-two__inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <div class="section-title__icon">
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="section-title__tagline">الخدمات الالكترونيه</span>
                            <h2 class="section-title__title">اكتشف الخدمات الالكترونية المقدمة
                                <br> من بلدية مدينة الرمثا
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <!-- Services Two Single Start -->
                    <div class="col-md-4" style="height: 100%;">
                        <div class="services-two__single text-center" style="height: 100%;">
                            <div class="services-content"
                                style="height: 70%; display: flex; flex-direction: column; justify-content: space-between;">
                                <h3 class="services-two__title"><a href="building-permission.html">ضريبة الابنية و الاراضي
                                        <br> "المسقفات" </a></h3>
                                <div class="services-two__icon">
                                    <span class="icon-accept"></span>
                                </div>
                            </div>
                            <!-- Button below h3 -->
                            <a href="link-to-page-1.html" class="btn btn-primary mt-2">المزيد</a>
                        </div>
                    </div>
                    <!-- Services Two Single End -->

                    <!-- Services Two Single Start -->
                    <div class="col-md-4" style="height: 100%;">
                        <div class="services-two__single text-center" style="height: 100%;">
                            <div class="services-content"
                                style="height: 70%; display: flex; flex-direction: column; justify-content: space-between;">
                                <h3 class="services-two__title"><a href="driving-license.html">طلب نقل ملكية
                                        <br> </a></h3>
                                <div class="services-two__icon">
                                    <span class="icon-accept"></span>
                                </div>
                            </div>
                            <!-- Button below h3 -->
                            <a href="link-to-page-2.html" class="btn btn-primary mt-2">المزيد</a>
                        </div>
                    </div>
                    <!-- Services Two Single End -->

                    <!-- Services Two Single Start -->
                    <div class="col-md-4" style="height: 100%;">
                        <div class="services-two__single text-center" style="height: 100%;">
                            <div class="services-content"
                                style="height: 70%; display: flex; flex-direction: column; justify-content: space-between;">
                                <h3 class="services-two__title"><a href="report-pollution.html">مخالفات السير
                                        <br> </a></h3>
                                <div class="services-two__icon">
                                    <span class="icon-accept"></span>
                                </div>
                            </div>
                            <br>
                            <!-- Button below h3 -->
                            <a href="link-to-page-3.html" class="btn btn-primary mt-2">المزيد</a>
                        </div>
                    </div>
                    <!-- Services Two Single End -->
                </div>
            </div>
        </div>
    </section>





    @include('Pages.Home.presidants')

    <br>
    <br>
    <br>
    <br>

    <!--statistics-->
    <div class="history-one__top">
        <div class="container" dir="rtl">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">احصائيات</span>
                <h2 class="section-title__title">احصائيات بلدية الرمثا الكبرى</h2>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section class="counter-one">
        <div class="counter-one__bg">
        </div>
        <div class="container">
            <div class="counter-one__inner">
                <ul class="counter-one__list list-unstyled">
                    <li>
                        <div class="counter-one__count">
                            <h3 class="odometer" data-count="32">00</h3>
                            <span class="">k</span>
                        </div>
                        <p class="counter-one__text">عدد الزوار

                    <li>
                        <div class="counter-one__count">
                            <h3 class="odometer" data-count="20">00</h3>
                            <span class=""></span>
                        </div>
                        <p class="counter-one__text">عدد الفعاليات
                        </p>
                    </li>
                    <li>
                        <div class="counter-one__count">
                            <h3 class="odometer" data-count="45">00</h3>
                            <span class=""></span>
                        </div>
                        <p class="counter-one__text">عدد الخدمات الالكترونية
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--statistics End-->

    @include('Pages.Home.events')
    <!-- Events End -->


    <!--News One Start-->
    @include('Pages.Home.news')
    <!--News One End-->


    <!--Brand One Start-->
    @include('Pages.Home.partners')
    <!--Brand One End-->

    <!--Feature Three Start-->
    @include('Pages.Home.suggestions')
    <!--Feature Three End-->

    <script>
        function updateCurrentTime() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';


            hours = hours % 12;
            hours = hours ? hours : 12; 

            minutes = minutes < 10 ? '0' + minutes : minutes;
            document.getElementById('current-time').innerText = hours + ':' + minutes + ' ' + ampm;
        }

        updateCurrentTime();
        setInterval(updateCurrentTime, 1000);
    </script>
@endsection
