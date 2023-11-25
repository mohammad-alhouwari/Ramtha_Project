@extends('layout.master')
@section('title', 'فرصة عمل')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }} );opacity:0.3">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>تفاصيل الفرصة</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li>فرصة عمل</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    {{-- {{dd($job)}} --}}

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row {{count($latestJobs) > 0 ? '' : 'justify-content-center'}}">
                <div class="{{ count($latestJobs) > 0 ? 'col-xl-8 col-lg-7' : 'col-xl-10 col-lg-10' }}">
                    <div class="news-details__left">
                        <div class="news-details__content">
                            <h3 class="news-details__title-1">{{ $job->title }}</h3>
                        </div>
                        <div class="news-details__img-box">
                            <div class="news-details__img">
                                <img src="{{ asset($job->image) }}" alt="">
                            </div>
                            <div class="news-details__date">
                                <p>{{ \Illuminate\Support\Carbon::parse($job->date)->format('d M') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($latestJobs) > 0)
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">فرص عمل اخرى</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($latestJobs as $job)
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="{{ asset($job->image) }}" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <a href="{{ route('showJob', $job->id) }}"> {{ $job->title }}
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
                @endif
            </div>
        </div>
    </section>
@endsection
