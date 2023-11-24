@extends('Layout.master')
@section('title', 'نبذة عن البلدية والاعضاء')
@section('header_title', 'نبذة عن البلدية والاعضاء')
@section('content')


    <!--Projects Page Start-->
    <section class="department-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">نبذة عن البلدية والاعضاء</span>
                <h2 class="section-title__title">نبذة عن البلدية والاعضاء</h2>
            </div>
            <div class="row">
                <div class="history-one__bottom">
                    <div class="history-one__wrap">
                        <div class="history-one__shape-1">
                            <div style=""></div>
                        </div>
                        <div class="container">
                            <div class="history-one__inner">
                                <div class="history-one__main-content">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="history-one__content-left">
                                                <img src="{{ asset($municipalityInfo->description_image) }}"
                                                    style="width: 400px; height:400px">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6" dir="rtl">
                                            <br>
                                            <br>
                                            <br>
                                            <div class="history-one__content-right">
                                                <h4 class="">نبذة عن البلدية</h4>
                                                <p class="history-one__content-text">
                                                    {{ $municipalityInfo->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px">
                            <div class="col-lg-6">
                                <h4 class="">الرؤيا</h4>
                                {{ $municipalityInfo->vision }}
                            </div>
                            <div class="col-lg-6">
                                <h4 class=""> الرسالة</h4>
                                {{ $municipalityInfo->mission }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <center>
                <div class="container">
                    <h4 class="history-one__content-title">أعضاء البلدية</h4>
                    <div class="team-one__inner">
                        <div class="row">
                            @foreach ($members as $member)
                                <div class="col-xl-4 col-lg-4">
                                    <div class="team-one__single">
                                        <div class="team-one__img-box">
                                            <div class="team-one__img">
                                                <img src="{{ $member->image }}" alt="" height="270px">
                                            </div>
                                        </div>
                                        <div class="team-one__content">
                                            <h3 class="team-one__name"><a href="team-details.html">{{ $member->name }}</a>
                                            </h3>
                                            <p class="team-one__sub-title">{{ $member->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </center>
        </div>
        </div>
    </section>

    <!--Projects Page End-->
@endsection
