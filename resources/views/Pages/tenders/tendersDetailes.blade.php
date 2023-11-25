@extends('Layout.master')
@section('title', 'العطاءات')
@section('header_title', 'العطاءات')
@section('content')

    <section class="contact-page">
        <div class="container">
            <div class="contact-page__top">
                <div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__right">
                            <div class="section-title text-center">
                                <div class="section-title__icon">
                                    <span class="fa fa-star"></span>
                                </div>

                                <h2 class="section-title__title"  style="direction: rtl; color:#0063ae; "  >{{ $tenders->title }}</h2>
                            </div>
                            <p class="contact-page__text text-center" style="direction: rtl; ">{{ $tenders->description }}
                            </p>

                            <ul class="list-unstyled contact-page__contact-list"  >
                                <li style="direction: rtl;">
                                    <div class="icon">
                                        <span class="fas fa-money-bill"></span>
                                    </div>
                                    <div class="content" style="margin-right: 15px" >
                                        <p>قيمة العطاء :</p>
                                        <h4> {{ $tenders->value }}</h4>
                                    </div>
                                </li>
                                <li  style="direction: rtl;">
                                    <div class="icon" style="direction: rtl;">
                                        <span class="far fa-calendar-alt"></span>
                                    </div>
                                    <div class="content" style="margin-right: 15px ; ">
                                        <p> الموعد النهائي لاستلام العروض :</p>
                                        <h4>{{ $tenders->date }}</h4>
                                    </div>
                                </li>
                                <li style="direction: rtl;">
                                    <div class="icon">
                                        <span class="far fa-image"></span>
                                    </div>
                                    <div class="content" style="margin-right: 15px">
                                        <p>تحميل الصورة :</p>
                                        <a href="{{ $tenders->preview_image }}" download>
                                            <h4>تحميل</h4>
                                        </a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>


                </div>
            </div>
            <br>
        <center >
            <div class="row">
                <div class="col-xl-6 col-lg-6 " style="padding: 10px">

                    <div class="contact-page__left">
                        <div class="contact-page__img-box">
                            <div class="contact-page__img">
                                <img src="{{ $tenders->preview_image }}" alt=""
                                    download>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 " style="padding: 10px">

                    <div class="contact-page__left">
                        <div class="contact-page__img-box">
                            <div class="contact-page__img">
                                <img src="{{ $tenders->preview_image2 }}" alt=""
                                     download>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </center>
        </div>

    </section>
@endsection
