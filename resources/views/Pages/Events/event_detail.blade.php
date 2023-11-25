@extends('Layout.master')
@section('title', 'تفاصيل الفعالية')
@section('header_title', 'تفاصيل الفعالية')
@section('content')

    <!--Event Details Start-->
    <section dir="rtl" class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="event-details__left">
                        <div class="row">

                            <div class="col-xl-6">
                                <div class="event-details__date-box">
                                    <div class="event-details__date-box-shape-1">
                                        <img src="assets/images/shapes/event-details-shape-1.png" alt="">
                                    </div>
                                    <div class="event-details__date-title-and-icon">
                                        <div class="event-details__date-icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <h3 class="event-details__date-title">الوقت والتاريخ</h3>
                                    </div>
                                    <p class="event-details__date-text">{{ $eventdetails->time }}<br>
                                        {{ $eventdetails->date }}</p>
                                </div>

                            </div>

                            <div class="col-xl-6">
                                <div style="height: 214px" class="event-details__location">
                                    <div class="event-details__location-shape-1">
                                        <img src="assets/images/shapes/event-details-shape-2.png" alt="">
                                    </div>
                                    <div class="event-details__location-title-and-icon">
                                        <div class="event-details__location-icon">
                                            <span class="icon-placeholder"></span>
                                        </div>
                                        <h3 class="event-details__location-title">الموقع</h3>
                                    </div>
                                    <p class="event-details__location-text">{{ $eventdetails->location }}

                                    </p>
                                </div>

                                <h3 class="event-details__title-1">تفاصيل الفعالية</h3>
                                <p class="event-details__text-1">
                                    {{ $eventdetails->description }}
                                </p>

                                <h5>السعة: <span style="color: rgb(26,115,232)">{{ $eventdetails->capacity }}</span>

                                    <!-- <div class="event-details__btn-box">
                                                <a href="event-details.html" class="event-details__btn thm-btn">Register Yourself
                                                    Now</a>
                                            </div> -->
                            </div>
                        </div>




                        <div class="event-details__img">
                            <img style="height: 300px" src="{{ url($eventdetails->preview_image) }}"></a>
                        </div>

                        <h3 class="event-details__title-1">تفاصيل الفعالية</h3>
                        <p class="event-details__text-1">
                            {{ $eventdetails->description }}
                        </p>

                        <h5>السعة: <span style="color: rgb(26,115,232)">{{ $eventdetails->capacity }}</span>

                            <!-- <div class="event-details__btn-box">
                                                            <a href="event-details.html" class="event-details__btn thm-btn">Register Yourself
                                                                Now</a>
                                                        </div> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="event-details__google-map">
                        {{-- <iframe style="height: 750px;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="event-details__google-map-one" allowfullscreen></iframe> --}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25050.07672906352!2d36.02459207847715!3d32.54305069831069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b8bf68f7c0ed1%3A0x708042fe7ab39ecf!2z2KjZhNiv2YrYqSDYp9mE2LHZhdir2Kcg2KfZhNmD2KjYsdmJ!5e1!3m2!1sar!2sjo!4v1700723727086!5m2!1sar!2sjo"
                            width="370" height="750" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section dir="rtl" class="contact-one">
        <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/contact-one-bg.png);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">
                    <h2 class="section-title__title">للتسجيل
                    </h2>
                </span>

            </div>
            <div class="contact-one__form-box ">

                <form action="{{ route('eventdetailform', $eventdetails->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        @if (session('status'))
                            <h6 class='alert alert-success'>{{ session('status') }}</h6>
                        @endif
                        <div class="col-xl-12">
                            <div class="contact-one__input-box">
                                <input type="text" placeholder="الاسم الثلاثي" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-one__input-box">
                                <input type="text" placeholder="رقم الهاتف" name="phone">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-one__input-box">
                                <input type="email" placeholder="البريد الالكتروني" name="email">
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section dir="rtl" class="contact-one">
                <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/contact-one-bg.png);">
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="section-title__tagline">
                            <h2 class="section-title__title">للتسجيل
                            </h2>
                        </span>

                    </div>
                    <div class="contact-one__form-box ">

                        <form action="{{ route('eventdetailform', $eventdetails->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                @if (session('status'))
                                    <h6 class='alert alert-success'>{{ session('status') }}</h6>
                                @endif
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="الاسم الثلاثي" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="رقم الهاتف" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="البريد الالكتروني" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    @if ($eventdetails->capacity != 0)
                                        {{-- <input type="hidden" name="capacity" value="1" min="1"
                                        max="{{ $eventdetails->capacity }}"> --}}
                                        <div class="contact-one__btn-box">
                                            {{-- <button
                                                style="color:white;background-color: rgb(26,115,232);border-radius: 7px;"
                                                type="submit" class="thm-btn contact-one__btn">تسجيل</button> --}}
                                                <div class="contact-two__btn-box">
                                                    <button type="submit" class="thm-btn contact-two__btn">تسجيل</button>
                                                </div>
                                        </div>
                                    @else
                                        <div class="contact-one__btn-box">
                                            <button disabled
                                                style="color:white;background-color: rgb(26,115,232);border-radius: 7px;"
                                                type="button" class="thm-btn contact-one__btn">انتهاء التسجيل</button>

                                        </div>
                                        {{-- <input type="hidden" name="capacity" value="0" min="1"
                                        max="{{ $eventdetails->capacity }}"> --}}
                                        {{-- <button type="submit" disabled><i class="fas fa-shopping-cart"></i>التسجيل مغلق</button> --}}
                                    @endif
                                    {{-- <div class="contact-one__btn-box">
                    <div class="row">
                        <div class="col-xl-12">
                            @if ($eventdetails->capacity != 0)
                                {{-- <input type="hidden" name="capacity" value="1" min="1"
                                        max="{{ $eventdetails->capacity }}"> --}}
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn contact-one__btn">تسجيل</button>

                                </div>
                            @else
                                <div class="contact-one__btn-box">
                                    <button disabled type="button" class="thm-btn contact-one__btn">انتهاء التسجيل</button>

                                </div>
                                {{-- <input type="hidden" name="capacity" value="0" min="1"
                                        max="{{ $eventdetails->capacity }}"> --}}
                                {{-- <button type="submit" disabled><i class="fas fa-shopping-cart"></i>التسجيل مغلق</button> --}}
                            @endif
                            {{-- <div class="contact-one__btn-box">
                                        <button style="color:white;background-color: rgb(26,115,232);border-radius: 7px;"
                                            type="submit" class="thm-btn contact-one__btn">انتهاء التسجيل</button>

                                    </div> --}}
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </section>
    <!--Event Details End-->



    </div>






    </body>
@endsection
