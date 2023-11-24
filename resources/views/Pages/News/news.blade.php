@extends('layout.master')
@section('title', 'الأخبار')
@section('header_title', 'الاخبار')

@section('content')

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
                <div class="row rownews">
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
                                    {{-- Check if the item's description exists --}}
                                    @if ($new->description)
                                        {{-- Split the description into words --}}
                                        @php
                                            $words = explode(' ', $new->description);
                                            $limitedWords = implode(' ', array_slice($words, 0, 10));
                                        @endphp

                                        {{-- Display the first 10 words and 'Read more' link --}}
                                        <p>
                                            {{ $limitedWords }}
                                            @if (count($words) > 10)
                                                ...
                                            @endif
                                            <a style="color: var(--govity-base)"
                                                href="{{ route('showDetailsNews', $new->id) }}">اقرأ المزيد</a>
                                        </p>
                                    @endif

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
