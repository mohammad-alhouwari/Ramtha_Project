@extends('Layout.master')
@section('title', 'Project')
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
                <h2>{{ $project->title }}</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('showAllProjects') }}">المشاريع</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Details Start-->
    <section class="department-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="department-details__left">
                        <div class="department-details__icon-and-title">
                            <div class="department-details__icon">
                                <span class="icon-parthenon"></span>
                            </div>
                            <h3 class="department-details__title m-4">{{ $project->title }}</h3>
                            <br>
                            <br>
                        </div>
                        <img src="{{ asset($project->preview_image) }}" alt="" class="project-details__img">
                        <div class="about-two__progress">
                            <div class="about-two__progress-single">
                                <h4 class="about-two__progress-title"> نسبة الانجاز في المشروع :</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{ $project->percentage }}%">
                                        <div class="count-text">{{ $project->percentage }}%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="department-details__text-1">
                            {{ $project->description }}
                        </p>
                    </div>
                    @if ($projectImages && count($projectImages) > 0)
                        <h4 class="about-two__progress-title"> صور عن المشروع:</h4>
                        {{-- <div class="owl-carousel owl-theme"> --}}
                        @foreach ($projectImages as $projectImage)
                            <img src="{{ asset($projectImage->media) }}" alt="Image1" style="margin: 10px"
                                width="100px" />
                        @endforeach
                        {{-- </div> --}}
                    @endif
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="department-details__right">
                        <div class="department-details__services-box">
                            <ul class="department-details__services-list list-unstyled">
                                @foreach ($allProjects as $project)
                                    <li>
                                        <a href="{{ route('showProject', $project->id) }}">{{ $project->title }}<span
                                                class="icon-left-arrow"></span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Details End-->

@endsection
