@extends('Layout.master')
@section('title', 'الهيكل التنظيمي')
@section('header_title', 'الهيكل التنظيمي')
@section('content')


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
                        <img src="{{ asset('assets\images\organizational-chart.jpeg') }}" width="100%" height="100%" />
                    </div>
                </center>
            </div>
        </div>
    </section>

    <!--Projects Page End-->
@endsection
