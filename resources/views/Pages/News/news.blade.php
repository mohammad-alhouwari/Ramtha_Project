@extends('layout.master')
@section('title', 'الأخبار')
@section('content')
    <!--Page Header End-->

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg );opacity:0.3">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>الأخبار</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li ><a href="{{ route('showAllNews') }}">الأخبار</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--News Page Start-->
    <section class="news-page">
        <div class="container">
            <div class="row">
                <!--News One Single Start-->
                @foreach ($news as $new)
                <div class="col-xl-4 col-lg-4">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="{{$new->preview_image}}" alt="">
                            </div>
                            <div class="news-one__date">
                                <p>6 <br> NOV</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <h3 class="news-one__title"><a href="{{route('showDetailsNews', $new->id)}}">جلسة عصف ذهني لبناء مشروع الموقع
                                    الإلكتروني
                                </a>
                            </h3>
                            <div class="news-one__btn">
                                <a href="{{route('showDetailsNews', $new->id)}}">اقرأ المزيد<i class="icon-left-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4 col-lg-4">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="assets/images/News/دوار القبة.jpg" alt="">
                            </div>
                            <div class="news-one__date">
                                <p>30 <br> JAN</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <h3 class="news-one__title"><a href="{{route('news-details')}}">الإنتهاء من أعمال تصميم دوار القبة </a>
                            </h3>
                            <div class="news-one__btn">
                                <a href="{{route('news-details')}}">اقرأ المزيد<i class="icon-left-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="assets/images/News/توقيع.jpg" alt="">
                            </div>
                            <div class="news-one__date">
                                <p>15 <br> JAN</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <h3 class="news-one__title"><a href="news-details.html">وقع رئيس بلدية الرمثا الكبرى إتفاقية مع
                                    شركة الدقامسة للمقاولات</a>
                            </h3>
                            <div class="news-one__btn">
                                <a href="news-details.html">اقرأ المزيد<i class="icon-left-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--News Page End-->
@endsection
