@extends('layout.master')
@section('title', 'فرصة عمل')

@section('header_title', 'فرصة عمل')

@section('content')

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
