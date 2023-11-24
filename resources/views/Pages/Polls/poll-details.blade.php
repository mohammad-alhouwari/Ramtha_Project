@extends('Layout.master')
@section('title', 'Polls')

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ url('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $PollTopic->title }}</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ redirect('/') }}">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('showAllPolls') }}">إستطلاعات الرأي</a></li>
                    <li><span>/</span></li>
                    <li>{{ $PollTopic->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Event Details Start-->
    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="event-details__left text-center">
                        <div class=" event-details__img text-center">
                            <img class="w-50" src="{{ asset($PollTopic->image) }}" alt="">
                        </div>
                        <h3 class="event-details__title-1">{{ $PollTopic->title }}</h3>
                        <p class="event-details__text-1">{{ $PollTopic->description }}</p>
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
                    <h2 class="section-title__title">للمشاركة في إستطلاعات الرأي
                    </h2>
                </span>

            </div>
            <div class="contact-one__form-box ">

                <form action="{{ route('userPoll', $PollTopic->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        @if (session('status'))
                            <h6 class='alert alert-success'>{{ session('status') }}</h6>
                        @endif
                        <div class="col-xl-12">
                            <div class="contact-one__input-box">
                                <input type="text" placeholder="الرقم الوطني" name="national_id" max="10"
                                    min="10" required>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-one__input-box">
                                <select class="select-poll" name="rating" id="" required>
                                    <option value="" disabled selected>-- هل أنت موافق --</option>
                                    <option value="5">موافق بشدة</option>
                                    <option value="4">موافق</option>
                                    <option value="3">محايد</option>
                                    <option value="2">معارض</option>
                                    <option value="1">معارض بشدة</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-one__input-box">
                                <textarea name="user_message" id="" rows="4" placeholder="أترك رسالة قصيرة (إختياري)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-one__btn-box">
                                <button style="color:white;background-color: rgb(26,115,232);border-radius: 7px;"
                                    type="submit" class="thm-btn contact-one__btn">شارك رأيك</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </section>
    <!--Event Details End-->
@endsection
