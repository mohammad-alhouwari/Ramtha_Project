@extends('Layout.master')
@section('title', 'الهيكل التنظيمي')

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
                <h2>الهيكل التنظيمي</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('president') }}">الهيكل التنظيمي</a></li>
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
                <span class="section-title__tagline">الهيكل التنظيمي</span>
                <h2 class="section-title__title">الهيكل التنظيمي</h2>
            </div>
            <div class="row">
                <center>
                    <div>
                        <img src="{{ asset('assets\images\organizational-chart.PNG') }}" width="500px" height="500px" />
                    </div>
                </center>
            </div>
        </div>
    </section>

    <!--Projects Page End-->
@endsection
