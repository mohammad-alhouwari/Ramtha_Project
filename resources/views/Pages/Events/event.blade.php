@extends('Layout.master')
@section('title', 'Events')

@section('content')

    <body class="custom-cursor">


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section dir="rtl" class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>الفعاليات</h2>
                    <ul style="margin-left: 30px;" class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><span>/</span></li>
                        <li>الفعاليات</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Events Page Start-->
        <section style="direction: rtl;" class="events-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">فعالياتنا</span>
                    <h1>اكتشف فعاليات بلديةالرمثا</h1>
                </div>
                <br>
                <div class="row">
                    <!--Event Three Single Start-->
                    @foreach ($events as $event)
                        <div class="col-xl-4 col-lg-4">
                            <div class="event-three__single">
                                <div class="event-three__img-box">
                                    <div class="event-three__img">
                                        <img class="event-img" src="{{ url( $event->preview_image) }}"></a>
                                    </div>
                                </div>
                                <div class="event-three__content">
                                    <div class="event-three__meta-and-title">
                                        <ul class="event-three__meta list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fa fa-clock"></span>
                                                </div>
                                                <div class="text" style="margin-left: 20px">
                                                    <p>{{ $event->time }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fa fa-map-marker"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $event->location }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <h4 class="event-three__title" style="font-size: 20px"><a href="{{ route('eventdetail', ['id' => $event->id]) }}">
                                                {{ $event->title }}</a>
                                        </h4>
                                    </div>
                                    <div class="event-three__btn-box">
                                        <a href="{{ route('eventdetail', ['id' => $event->id]) }}"
                                            class="event-three__btn">للمزيد<i class="icon-left-arrow"></i></a>
                                    </div>
                                    <div class="event-three__date">
                                        <p> {{ $event->date }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--Event Three Single End-->
                    <!--Event Three Single Start-->
                    {{-- <div class="col-xl-4 col-lg-4">
                        <div class="event-three__single">
                            <div class="event-three__img-box">
                                <div class="event-three__img">
                                    <img src="assets/images/events/event-3-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="event-three__content">
                                <div class="event-three__meta-and-title">
                                    <ul class="event-three__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="event-three__title"><a href="event-details.html">Leverage agile
                                            frameworks to provide</a>
                                    </h3>
                                </div>
                                <div class="event-three__btn-box">
                                    <a href="event-details.html" class="event-three__btn">Read More<i
                                            class="icon-right-arrow"></i></a>
                                </div>
                                <div class="event-three__date">
                                    <p>20 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Event Three Single End-->
                    <!--Event Three Single Start-->
                    {{-- <div class="col-xl-4 col-lg-4">
                        <div class="event-three__single">
                            <div class="event-three__img-box">
                                <div class="event-three__img">
                                    <img src="assets/images/events/event-3-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="event-three__content">
                                <div class="event-three__meta-and-title">
                                    <ul class="event-three__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="event-three__title"><a href="event-details.html">Iterative approaches to
                                            corporate
                                            strategy</a>
                                    </h3>
                                </div>
                                <div class="event-three__btn-box">
                                    <a href="event-details.html" class="event-three__btn">Read More<i
                                            class="icon-right-arrow"></i></a>
                                </div>
                                <div class="event-three__date">
                                    <p>20 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Event Three Single End-->
                    <!--Event Three Single Start-->
                    {{-- <div class="col-xl-4 col-lg-4">
                        <div class="event-three__single">
                            <div class="event-three__img-box">
                                <div class="event-three__img">
                                    <img src="assets/images/events/event-3-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="event-three__content">
                                <div class="event-three__meta-and-title">
                                    <ul class="event-three__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="event-three__title"><a href="event-details.html">level overviews
                                            iterative approaches</a>
                                    </h3>
                                </div>
                                <div class="event-three__btn-box">
                                    <a href="event-details.html" class="event-three__btn">Read More<i
                                            class="icon-right-arrow"></i></a>
                                </div>
                                <div class="event-three__date">
                                    <p>20 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Event Three Single End-->
                    <!--Event Three Single Start-->
                    {{-- <div class="col-xl-4 col-lg-4">
                        <div class="event-three__single">
                            <div class="event-three__img-box">
                                <div class="event-three__img">
                                    <img src="assets/images/events/event-3-5.jpg" alt="">
                                </div>
                            </div>
                            <div class="event-three__content">
                                <div class="event-three__meta-and-title">
                                    <ul class="event-three__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="event-three__title"><a href="event-details.html">Frameworks to provide a
                                            robust
                                            synopsis</a>
                                    </h3>
                                </div>
                                <div class="event-three__btn-box">
                                    <a href="event-details.html" class="event-three__btn">Read More<i
                                            class="icon-right-arrow"></i></a>
                                </div>
                                <div class="event-three__date">
                                    <p>20 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Event Three Single End-->
                    <!--Event Three Single Start-->
                    {{-- <div class="col-xl-4 col-lg-4">
                        <div class="event-three__single">
                            <div class="event-three__img-box">
                                <div class="event-three__img">
                                    <img src="assets/images/events/event-3-6.jpg" alt="">
                                </div>
                            </div>
                            <div class="event-three__content">
                                <div class="event-three__meta-and-title">
                                    <ul class="event-three__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>08:00am</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="event-three__title"><a href="event-details.html">Corporate strategy data
                                            foster
                                            to
                                            collaborative</a>
                                    </h3>
                                </div>
                                <div class="event-three__btn-box">
                                    <a href="event-details.html" class="event-three__btn">Read More<i
                                            class="icon-right-arrow"></i></a>
                                </div>
                                <div class="event-three__date">
                                    <p>20 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Event Three Single End-->
                </div>
            </div>
        </section>
        <!--Events Page End-->


    </body>
@endsection
