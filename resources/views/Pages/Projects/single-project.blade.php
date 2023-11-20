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
                                <li>
                                    <a href="#">Your Government<span class="icon-right-arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#">Jobs & Unemployment<span class="icon-right-arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#">Business & Industrials<span class="icon-right-arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#">Roads & Transportation<span class="icon-right-arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#">Art & Culture<span class="icon-right-arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#">Policing & Crimes<span class="icon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="department-details__great-place">
                            <div class="department-details__great-place-bg"
                                style="background-image: url(assets/images/backgrounds/department-details-great-place-bg.jpg);">
                            </div>
                            <div class="department-details__great-place-icon">
                                <span class="icon-cityscape "></span>
                            </div>
                            <p class="department-details__great-place-text">Great city & place
                                to develop your
                                career</p>
                            <a href="#" class="department-details__great-place-btn thm-btn">Join Now</a>
                        </div>
                        <div class="department-details__call-box">
                            <div class="department-details__call-box-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="department-details__call-box-content">
                                <p>Have any Question?</p>
                                <h3><span>Free </span><a href="tel:+9212340800">+92 (1234) 0800</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Details End-->

@endsection
