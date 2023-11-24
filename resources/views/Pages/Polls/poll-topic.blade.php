@extends('Layout.master')
@section('title', 'استطلاعات الرأي')
@section('header_title', 'استطلاعات الرأي')
@section('content')

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
        @endsection
