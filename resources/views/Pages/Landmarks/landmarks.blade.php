@extends('Layout.master')
@section('title', 'اهم المعالم')
@section('header_title', 'اهم المعالم')
@section('content')

    @php use Illuminate\Support\Str; @endphp

    <!--Landmarks Page Start-->
    <section class="department-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">اهم معالم</span>
                <h2 class="section-title__title">اكتشف اهم معالم بلدية <br>الرمثا</h2>
            </div>
            <div class="row">
                @foreach ($landmarks as $index => $landmark)
                    <div class="our-history__inner" lang="en" dir="ltr">
                        <!--Our History Single Start-->
                        <div class="our-history__single">
                            <div class="our-history__main-content-box">
                                @if ($index % 2 == 0)
                                    <div class="our-history__main-content-single">
                                        <ul class="row list-unstyled">
                                            <li class="col-xl-6 col-lg-6">
                                                <div class="our-history__img-box">
                                                    <div class="our-history__img">
                                                        <a href={{ route('showLandmark', $landmark->id) }}>
                                                            <img src="{{ asset($landmark->preview_image) }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-6 col-lg-6">
                                                <div class="our-history__content-one">
                                                    <div class="our-history__content-one-title-box">
                                                        <div class="our-history__content-one-circle-one">
                                                            <div class="our-history__content-one-circle-two">
                                                                <div class="our-history__content-one-circle-three"></div>
                                                            </div>
                                                        </div>
                                                        <p class="our-history__content-one-sub-title" lang="ar"
                                                            dir="rtl">
                                                            {{ $landmark->location }}
                                                        </p>
                                                        <h3 class="our-history__content-one-title" lang="ar"
                                                            dir="rtl">
                                                            <a href={{ route('showLandmark', $landmark->id) }}
                                                                style="color:black">
                                                                {{ $landmark->title }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="our-history__content-one-text-box">
                                                        <p class="our-history__content-one-text" lang="ar"
                                                            dir="rtl">
                                                            {{ Str::limit($landmark->description, 400) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <div class="our-history__main-content-single">
                                        <ul class="row list-unstyled">
                                            <li class="col-xl-6 col-lg-6">
                                                <div class="our-history__content-two">
                                                    <div class="our-history__content-two-title-box">
                                                        <div class="our-history__content-two-circle-one">
                                                            <div class="our-history__content-two-circle-two">
                                                                <div class="our-history__content-two-circle-three"></div>
                                                            </div>
                                                        </div>
                                                        <p class="our-history__content-two-sub-title" lang="ar"
                                                            dir="rtl">
                                                            {{ $landmark->location }}
                                                        </p>
                                                        <h3 class="our-history__content-two-title" lang="ar"
                                                            dir="rtl">
                                                            <a href={{ route('showLandmark', $landmark->id) }}
                                                                style="color:black">
                                                                {{ $landmark->title }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="our-history__content-two-text-box">
                                                        <p class="our-history__content-two-text" lang="ar"
                                                            dir="rtl">
                                                            {{ Str::limit($landmark->description, 400) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-6 col-lg-6">
                                                <div class="our-history__img-box-two">
                                                    <div class="our-history__img-two">
                                                        <a href={{ route('showLandmark', $landmark->id) }}>
                                                            <img src="{{ asset($landmark->preview_image) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!--Our History Single End-->
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!--Landmarks Page End-->
@endsection
