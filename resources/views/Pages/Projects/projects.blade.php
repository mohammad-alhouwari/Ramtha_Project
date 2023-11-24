@extends('Layout.master')
@section('title', 'Projects')

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
                <h2>المشاريع</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('showAllProjects') }}">المشاريع</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    @php use Illuminate\Support\Str; @endphp

    <!--Projects Page Start-->
    @if ($projects->isEmpty())
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
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">مشاريعُنا</span>
                    <h2 class="section-title__title">اكتشف مشاريع بلدية <br>الرمثا</h2>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="department-two__single">
                                <div class="department-two__img-box">
                                    <div class="department-two__img">
                                        <img src="{{ $project->preview_image }}" alt="" height="300px">
                                    </div>
                                    <div class="department-two__content">
                                        <div class="department-two__icon">
                                            <span class="icon-parthenon"></span>
                                        </div>
                                        <h3 class="department-two__title">
                                            <a href="{{ route('showProject', $project->id) }}">
                                                {{ $project->title }}
                                            </a>
                                        </h3>
                                        <div class="about-two__progress">
                                            <div class="about-two__progress-single">
                                                <h4 class="about-two__progress-title">نسبة الانجاز</h4>
                                                <div class="bar">
                                                    <div class="bar-inner count-bar"
                                                        data-percent="{{ $project->percentage }}%">
                                                        <div class="count-text">{{ $project->percentage }}%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="department-two__content-two">
                                        <h3 class="department-two__title-two">
                                            <a href="{{ route('showProject', $project->id) }}">
                                                {{ $project->title }}
                                            </a>
                                        </h3>
                                        <p class="department-two__text">
                                            {{ Str::limit($project->description, 50) }}</p>
                                        <div class="department-two__btn-box">
                                            <a href="{{ route('showProject', $project->id) }}" class="department-two__btn">
                                                قراءة المزيد&nbsp;<i class="icon-left-arrow"></i>
                                            </a>
                                        </div>
                                        <div class="department-two__icon-two">
                                            <span class="icon-parthenon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--Projects Page End-->
@endsection
