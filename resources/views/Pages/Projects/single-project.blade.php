@extends('Layout.master')
@section('title', 'تفاصيل المشروع')
@section('header_title', 'المشاريع')
@section('content')


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
                            @foreach ($projectImages as $projectImage)
                                <div class="brand-one__single">
                                    <div class=" items">
                                        <img src="{{ asset($projectImage->media) }}" alt="Image1" style="margin: 10px"
                                            width="200px" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="department-details__right">
                        <div class="department-details__services-box">
                            <h3 class="sidebar__title">آخر المشاريع</h3>
                            <br>
                            <ul class="department-details__services-list list-unstyled">
                                @foreach ($latestProjects as $project)
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
    </section>
    <!--Project Details End-->

@endsection
