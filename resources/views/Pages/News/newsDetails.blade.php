@extends('layout.master')
@section('title', 'تفاصيل الخبر')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg );opacity:0.3">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>تفاصيل الخبر</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li>الأخبار</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img-box">
                            <div class="news-details__img">
                                <img src="assets/images/News/اجتماع موقع الاكتروني.JFIF" alt="">
                            </div>
                            <div class="news-details__date">
                                <p>6 <br> Nov</p>
                            </div>
                        </div>
                        <div class="news-details__content">

                            <h3 class="news-details__title-1">جلسة عصف ذهني لبناء مشروع الموقع
                                الإلكتروني</h3>
                            <p class="news-details__text-1">بتوجيه من رئيس بلدية الرمثا الكبرى سعادة أحمد الخزاعلة قام فريق
                                تكنولوجيا المعلومات في بلدية الرمثا صباح اليوم
                                بمشاركة Coding Academy By Orange في جلسة عصف ذهني تشاركية لإعداد خطة متكاملة لبناء مشروع
                                الموقع الإلكتروني الشامل لجميع خدمات البلدية .
                                نشكر مدير أكاديمية البرمجة في أورانج السيد محمد فريحات والفريق الرائع على حسن التعاون
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">آخر الأخبار</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/News/دوار القبة.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                           
                                            <a href="news-details.html">الإنتهاء من أعمال تصميم دوار القبة <br>
                                                </a>
                                        </h3>
                                    </div>
                                </li>
                             
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/News/توقيع.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            
                                            <a href="news-details.html">وقع رئيس بلدية الرمثا الكبرى إتفاقية مع
                                                شركة الدقامسة للمقاولات </a>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
