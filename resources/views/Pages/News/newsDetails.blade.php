@extends('layout.master')
@section('title', 'تفاصيل الخبر')
@section('header_title', 'تفاصيل الخبر')
@section('content')

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img-box">
                            <div class="news-details__img">
                                <img src="{{ asset($news->preview_image) }}" alt="">
                            </div>
                            <div class="news-details__date">
                                <p>{{ \Illuminate\Support\Carbon::parse($news->date)->format('d M') }}</p>
                            </div>
                        </div>
                        <div class="news-details__content">
                            <h3 class="news-details__title-1">{{ $news->title }}</h3>
                            <p class="news-details__text-1">{{ $news->description }}
                        </div>
                    </div>
                    <br>
                    <br>
                    @if ($newsImages && count($newsImages) > 0)
                        <h4 class="about-two__progress-title"> صور عن الخبر:</h4>
                        <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" lang="en"
                            dir="ltr"
                            data-owl-options='{
                                    "items": 3,
                                    "margin": 30,
                                    "smartSpeed": 3000,
                                    "loop": true,
                                    "autoplay": false,  <!-- Change this line to enable autoplay -->
                                    "autoplayTimeout": 6000,  <!-- Set the autoplay timeout (in milliseconds) -->
                                    "nav": false,
                                    "dots": false,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>", "<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 3
                                        },
                                        
                                    }
                                }'>
                            @foreach ($newsImages as $newsImage)
                                <div class="brand-one__single">
                                    <div class=" items">
                                        <img src="{{ asset($newsImage->media) }}" alt="Image1" style="margin: 10px"
                                            width="200px" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">آخر الأخبار</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($latestNews as $latest)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset($latest->preview_image) }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ route('showDetailsNews', $latest->id) }}"> {{ $latest->title }}
                                                    <br>
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
