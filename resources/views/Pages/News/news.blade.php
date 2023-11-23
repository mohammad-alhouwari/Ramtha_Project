@extends('layout.master')
@section('title', 'الأخبار')
@section('content')
    <!--Page Header End-->

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/banner.jpeg );opacity:0.3">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>الأخبار</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('showAllNews') }}">الأخبار</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--News Page Start-->
    @if ($news->isEmpty())
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">أخبارُنا</span>
                    <h2 class="section-title__title">لا يوجد أخبار لعرضها</h2>
                </div>
                <div class="row">
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn thm-btn">العودة الى الصفحة الرئيسية</a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="news-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">أخبارُنا</span>
                    <h1>اكتشف أخبار بلديةالرمثا</h1>
                </div>
                <br>
                <div class="row">
                    <!--News One Single Start-->
                    @foreach ($news as $new)
                        <div class="col-xl-4 col-lg-4 news-div">
                            <div class="news-one__single">
                                <div class="news-one__img-box">
                                    <div class="news-one__img">
                                        <img class="news-img" src="{{ $new->preview_image }}" alt="">
                                    </div>

                                    <div class="news-one__date">
                                        <p>{{ \Illuminate\Support\Carbon::parse($new->date)->format(' M d ') }}</p>
                                    </div>

                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="{{ route('showDetailsNews', $new->id) }}">
                                            {{ $new->title }}
                                        </a>
                                    </h3>
                                    <div class="news-one__btn">
                                        <a href="{{ route('showDetailsNews', $new->id) }}">اقرأ المزيد<i
                                                class="icon-left-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                </div>
            </div>
        </section>
    @endif
    <!--News Page End-->
@endsection
