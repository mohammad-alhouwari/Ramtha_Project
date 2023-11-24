@extends('Layout.master')
@section('title', 'Polls')

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>إستطلاعات الرأي</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ redirect('/') }}">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li>إستطلاعات الرأي</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Events Page Start-->
    <section class="events-page">
        <div class="container">
            <div class="row">
                @foreach ($PollTopics as $PollTopic)
                    <!--Event Three Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="event-three__single">
                            <div class="event-three__img-box">
                                <div class="event-three__img">
                                    <img src="{{ asset($PollTopic->image) }}" alt="">
                                </div>
                            </div>
                            <div class="event-three__content">
                                <div class="event-three__meta-and-title">
                                    <ul class="event-three__meta list-unstyled">
                                    </ul>
                                    <h3 class="event-three__title text-center"><a
                                            href="{{ route('showPoll', $PollTopic->id) }}">{{ $PollTopic->title }}</a>
                                    </h3>
                                </div>
                                <div class="event-three__btn-box">
                                    <a href="{{ route('showPoll', $PollTopic->id) }}" class="event-three__btn">إقــرأ
                                        الـمــزيـد<i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="event-three__date text-center">
                                    <p>ابتداء</p>
                                    <p>{{ $PollTopic->created_at->format('Y-m-d') }}</p>
                                </div>
                                <div class="event-three__date-L bg-danger text-center">
                                    <p>إنتهاء</p>
                                    <p>{{ $PollTopic->end_date }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Event Three Single End-->
                @endforeach
            </div>
        @endsection
