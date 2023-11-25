@extends('Layout.master')
@section('title', 'بلدية الرمثا')
@section('content')

    <!-- Main Slider Three Start -->
    <section class="main-slider-three" lang="en" dir="ltr">
        <div class="main-slider-three__carousel owl-carousel owl-theme thm-owl__carousel" style="top:100px" lang="en"
            dir="ltr"
            data-owl-options='{"loop": false, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>" ], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 3000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
            <div class="item main-slider-three__slide-1">
                <div class="main-slider-three__bg"
                    style="background: url(assets/images/backgrounds/ramtha.jpg) center / cover no-repeat;">
                </div>
                <!-- /.slider-one__bg -->
                <div class="container" dir="rtl">
                    <div class="main-slider-three__content">
                        <h2 class="main-slider-three__title">مرحبًا بك في بلدية الرمثا!

                        </h2>
                        <br>

                        <p class="main-slider-three__sub-title"> 
                            نفخر بتقديم خدماتنا لسكاننا الكرام. بلدية الرمثا قلب المجتمع، حيث نعمل بجد على
                            <br>
                            تحسين  جودة الحياة وتقديم الخدمات بفعالية .                                                       
                            </p>
                        <div class="main-slider-three__btn-box">
                            <a href="about.html" class="main-slider-three__btn thm-btn">اكتشف المزيد</a>
                        </div>
                        <div class="main-slider-three__weather-box">
                            <ul class="main-slider-three__weather-list list-unstyled">
                                <li>
                                    <div class="icon" >
                                        <span class="icon-sun-day-weather-symbol" style="padding-bottom: 5px ; font-size:20px"> الحرارة</span>
                                    </div>
                                    <div class="text" >
                                        <p>32 0C / 65 0F</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock" style="padding-bottom: 5px ; font-size:20px"> الوقت</span>
                                    </div>
                                    <div class="text" s>
                                        <p id="current-time-1"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item main-slider-three__slide-2">
                <div class="main-slider-three__bg"
                    style="background: url(assets/images/backgrounds/Just1.jpg); no-repeat width: 100%">
                </div><!-- /.slider-one__bg -->
                <div class="container" dir="rtl">
                    <div class="main-slider-three__content">
                        <h2 class="main-slider-three__title">تفاعل مع أفضل الخدمات!

                        </h2>
                        <br>

                        <p class="main-slider-three__sub-title">يوفر نظام الخدمات الالكترونية جميع الخدمات التي يحتاجها المواطنين  في مدينة <br>الرمثا الذي يوفر الوقت والجهد والمعاملات الورقية التقليدية،
                            </p>
                        <div class="main-slider-three__btn-box">
                            <a href="about.html" class="main-slider-three__btn thm-btn">اكتشف المزيد</a>
                        </div>
                        <div class="main-slider-three__weather-box">
                            <ul class="main-slider-three__weather-list list-unstyled">
                                <li>
                                    <div class="icon" >
                                        <span class="icon-sun-day-weather-symbol" style="padding-bottom: 5px ; font-size:20px"> الحرارة</span>
                                    </div>
                                    <div class="text" >
                                        <p>32 0C / 65 0F</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock" style="padding-bottom: 5px ; font-size:20px"> الوقت</span>
                                    </div>
                                    <div class="text" s>
                                        <p id="current-time-2"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider-three__slide-3">
                <div class="main-slider-three__bg" style="background: url(assets/images/backgrounds/stad.png) no-repeat;">
                </div><!-- /.slider-one__bg -->
                <div class="container" dir="rtl">
                    <div class="main-slider-three__content">
                        <h2 class="main-slider-three__title"> ابقى على اطلاع دائم!

                        </h2>
                        <br>
                        <p class="main-slider-three__sub-title">
                            تابع أحدث الأخبار والفعاليات في بلدية الرمثا. نحن دائما في حركة، ونشارك 
                            <br>
                            أحدث التطورات والأحداث في المجتمع.
                            </p>
                        <div class="main-slider-three__btn-box">
                            <a href="about.html" class="main-slider-three__btn thm-btn">اكتشف المزيد</a>
                        </div>
                        <div class="main-slider-three__weather-box">
                            <ul class="main-slider-three__weather-list list-unstyled">
                                <li>
                                    <div class="icon" >
                                        <span class="icon-sun-day-weather-symbol" style="padding-bottom: 5px ; font-size:20px"> الحرارة</span>
                                    </div>
                                    <div class="text" >
                                        <p>32 0C / 65 0F</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock" style="padding-bottom: 5px ; font-size:20px"> الوقت</span>
                                    </div>
                                    <div class="text" s>
                                        <p id="current-time-3"></p>
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

  <!-- services start -->
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
                        <h3 class="section-title__title" style="font-size: 33px!important; ">اكتشف الخدمات الالكترونية المقدمة
                        من بلدية مدينة الرمثا
                        </h3>
                        <br>
                        <p style="color:rgb(75, 75, 75)!important">يوفر نظام الخدمات الالكترونية جميع الخدمات التي يحتاجها المواطنين في مدينة الرمثا الذي يوفر الوقت والجهد والمعاملات الورقية التقليدية،<br> ما عليك سوى اختيار الخدمة المطلوبة من بوابة الخدمات الالكترونية واكمال الاجراءات بكل سهولة ويسر</p>
                        <br>
                        <div class="row" style="justify-content: center">


                <!-- Single Service Start -->
                <div class="col-xl-3 col-lg-4 col-md-5" >
                    <div class="services-two__single text-center" style="height: 100%;">
                        <div class="services-content" style="height: 70%; display: flex; flex-direction: column; justify-content: center;">
                            <div class="department-three__icon">
                            <span class="icon-bus"></span>
                            </div>
                            <br>
                            <h2 class="services-two__title">
                            <a href="driving-license.html"> مخالفات السير  
                            <br> 
                            </a>
                            </h2>
                            <br>
                            <div class="contact-two__btn-box">
                            <button type="submit" class="thm-btn contact-two__btn" onclick="window.location.href='https://www.ammancity.gov.jo/ar/eservices/login.aspx';">انتقل الى الخدمة</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service  End -->

                <!-- Services Single Start -->
                <div class="col-xl-3 col-lg-4 col-md-5" >
                    <div class="services-two__single text-center" style="height: 100%;">
                        <div class="services-content" style="height: 70%; display: flex; flex-direction: column; justify-content: center;">
                            <div class="department-three__icon">
                            <span class="icon-parthenon"></span>
                            </div>
                            <br>
                            <h2 class="services-two__title">
                            <a href="department-details.html"> طلب نقل ملكية   
                            <br> 
                            </a>
                            </h2>
                            <br>
                            <div class="contact-two__btn-box">
                            <button type="submit" class="thm-btn contact-two__btn" >انتقل الى الخدمة</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Single End -->

                <!-- Single Service Start -->
                <div class="col-xl-3 col-lg-4 col-md-5" >
                    <div class="services-two__single text-center" style="height: 100%;">
                        <div class="services-content" style="height: 70%; display: flex; flex-direction: column; justify-content: center;">
                            <div class="department-three__icon">
                            <span class="icon-tuscany"></span>
                            </div>
                            <br>
                            <h2 class="services-two__title">
                            <a href="department-details.html"> ضريبة الابنية و الاراضي   
                            <br> 
                            </a>
                            </h2>
                            <br>
                            <div class="contact-two__btn-box">
                            <button type="submit" class="thm-btn contact-two__btn" onclick="window.location.href='https://ptp.mof.gov.jo/index3.aspx';">انتقل الى الخدمة</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service  End -->

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- services end -->




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
<section class="counter-one" style="background-color: #ffffff!important">
    <div class="container">
        <div class="counter-one__inner" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
            <div style="background-color: #0063ae; border-radius: 8px; padding: 20px;">
                <div class="counter-one__count">
                    <h3 class="odometer" data-count="32">00</h3>
                </div>
                <p class="counter-one__text" style="margin-top: 10px; font-size: 18px;">عدد الزوار</p>
            </div>
            <div style="background-color: #0063ae; border-radius: 8px; padding: 20px;">
                <div class="counter-one__count">
                    <h3 class="odometer" data-count="{{ $eventsCount }}">00</h3>
                </div>
                <p class="counter-one__text" style="margin-top: 10px; font-size: 18px;">عدد الفعاليات</p>
            </div>
            <div style="background-color: #0063ae; border-radius: 8px; padding: 20px;">
                <div class="counter-one__count">
                    <h3 class="odometer" data-count="45">00</h3>
                </div>
                <p class="counter-one__text" style="margin-top: 10px; font-size: 18px;">عدد الخدمات الالكترونية</p>
            </div>
            <div style="background-color: #0063ae; border-radius: 8px; padding: 20px;">
                <div class="counter-one__count">
                    <h3 class="odometer" data-count="{{ $projectsCount }}">00</h3>
                </div>
                <p class="counter-one__text" style="margin-top: 10px; font-size: 18px;">عدد المشاريع</p>
            </div>
        </div>
    </div>

    <style>
        @media (max-width: 767px) {
            .counter-one__inner {
                grid-template-columns: 1fr!important; /* Display each counter in a single column */
            }
            .counter-one__inner > div {
                margin-bottom: 20px!important; /* Add margin between each counter */
            }
        }
    </style>
</section>

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
        function updateCurrentTime(sliderNumber) {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';

            hours = hours % 12;
            hours = hours ? hours : 12;

            minutes = minutes < 10 ? '0' + minutes : minutes;
            document.getElementById('current-time-' + sliderNumber).innerText = hours + ':' + minutes + ' ' + ampm;
        }
        updateCurrentTime(1);
        setInterval(function() {
            updateCurrentTime(1);
        }, 1000);
        updateCurrentTime(2);
        setInterval(function() {
            updateCurrentTime(1);
        }, 1000);
        updateCurrentTime(3);
        setInterval(function() {
            updateCurrentTime(3);
        }, 1000);
        updateCurrentTime(4);
        setInterval(function() {
            updateCurrentTime(4);
        }, 1000);
    </script>

@endsection
