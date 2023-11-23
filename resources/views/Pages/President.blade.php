@extends('Layout.master')
@section('title', 'كلمة الرئيس')

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
                <h2>كلمة الرئيس</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('president') }}">كلمة الرئيس</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="department-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">كلمة الرئيس</span>
                <h2 class="section-title__title">كلمة الرئيس</h2>
            </div>
            <div class="row">
                <center>
                    <div>
                        <img src="{{ $president->image }}" width="400px" height="400px" />
                        <br>
                        <br>
                        <h2 class="section-title__title">
                            بسم الله الرحمن الرحيم
                        </h2>
                        <br>
                        <p class="about-one__text">
                            {{ $president->speech }}
                        </p>
                        <p class="about-one__big-text" style="font-size: 15px !important;text-align: left;">
                            {{ $president->name }}
                        </p>
                    </div>
                </center>
            </div>
        </div>
    </section>

    <!--Projects Page End-->
@endsection
