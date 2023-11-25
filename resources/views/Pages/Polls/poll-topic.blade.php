@extends('Layout.master')
@section('title', 'استطلاعات الرأي')
@section('header_title', 'استطلاعات الرأي')
@section('content')
    @if ($PollTopics->isEmpty())
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">مشاريعُنا</span>
                    <h2 class="section-title__title">لا يوجد مشاريع لعرضها</h2>
                </div>
                <div class="row">
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn thm-btn">العودة الى الصفحة الرئيسية</a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <!--Events Page Start-->
        <section class="events-page  mb-3">
            <div class="container">
                <div class="row justify-content-around ">
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
                                            الـمــزيـد<i class="icon-left-arrow"></i></a>
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
            </div>
        </section>
    @endif
@endsection
