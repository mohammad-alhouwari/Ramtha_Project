@extends('Layout.master')
@section('title', 'كلمة الرئيس')
@section('header_title', 'كلمة الرئيس')
@section('content')

    <!--Projects Page Start-->
    <section class="department-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                
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
