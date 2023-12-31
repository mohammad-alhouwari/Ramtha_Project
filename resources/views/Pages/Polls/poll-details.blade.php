@extends('Layout.master')
@section('title', 'استطلاعات الرأي')
@section('header_title', 'استطلاعات الرأي')
@section('content')
    @include('sweetalert::alert')
    <section class="event-details pt-5">
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
        <div class="text-center m-3 row">
                        @if ($AVG != 0)
                        <h2 class="mb-1 {{ $AVGcss }}">{{ $AVG }}%</h2><span class="h6"> الأغلبية العظمى
                            للإستطلاع هي - <b>{{ $AVGrsult }}</b></span>
                        @else
                           <span class="mt-3">كن أول من يشارك بالإستطلاع</span> 
                        @endif
                    </div>
        <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/contact-one-bg.png);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">
                    <h2 class="section-title__title">
                        @if ($currentDate < $PollTopic->end_date)
                            للمشاركة في الإستبيان
                        @else
                            شكراً لمن شارك في الإستبيان
                        @endif

                    </h2>
                </span>

            </div>
            <div class="contact-one__form-box ">
                @if ($currentDate < $PollTopic->end_date)
                    <form action="{{ route('userPoll', $PollTopic->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            @if (session('status'))
                                <h6 class='alert alert-success text-center'>{{ session('status') }}</h6>
                                <script>

                                </script>
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
                                <div class="contact-two__btn-box">
                                    <button type="submit" class="thm-btn contact-two__btn">شارك رأيك</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @else
                    <div class="text-center">
                        <p class="text-worning">
                            لقد إنتهى الإستطلاع
                        </p>
                    </div>
                @endif
                <div class="result"></div>
            </div>
        </div>
    </section>
    <!--Event Details End-->
@endsection
