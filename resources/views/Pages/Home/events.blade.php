<!-- Events Start -->
<section class="history-one">
    <div class="history-one__top">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">آخر الفعاليات</span>
                <h2 class="section-title__title">آخر الفعاليات في مدينة الرمثا</h2>
            </div>
        </div>
    </div>
    <div class="history-one__bottom">
        <div class="history-one__wrap">
            <div class="history-one__shape-1">
                {{-- <img src="assets/images/shapes/history-one-shape-1.png" alt=""> --}}
            </div>
            <div class="container">
                <div class="history-one__inner">
                    <div class="history-one__slider">
                        <div class="history-one__thumb-box">
                            <div class="swiper-container" id="history-one__thumb">
                                <div class="swiper-wrapper">
                                    @foreach($events as $event)
                                        <div class="swiper-slide">
                                            <div class="history-one__date-box">
                                                <div class="history-one__circle-one">
                                                    <div class="history-one__circle-two">
                                                        <div class="history-one__circle-three"></div>
                                                    </div>
                                                </div>
                                                {{-- event date --}}
                                                <p class="history-one__date">{{ $event->date }}</p>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    @endforeach
                                </div><!-- /.swiper-wrapper -->
                                <div class="history-one__nav">
                                    <div class="swiper-button-prev" id="history-one__swiper-button-next">
                                        <i class="icon-left-arrow"></i>
                                    </div>
                                    <div class="swiper-button-next" id="history-one__swiper-button-prev">
                                        <i class="icon-right-arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="history-one__main-content">
                            <div class="swiper-container" id="history-one__carousel">
                                <div class="swiper-wrapper">
                                    @foreach($events as $event)
                                        <div class="swiper-slide">
                                            <div class="history-one__content">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6" dir="rtl">
                                                        <div class="history-one__content-left">
                                                            {{-- title --}}
                                                            <h4 class="history-one__content-title">{{ $event->title }}</h4>
                                                            <p class="history-one__content-text">{{ $event->description }}</p>
                                                            {{-- Add other event details as needed --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="history-one__content-right">
                                                            <div class="history-one__content-img">
                                                                <img src="{{ asset('storage/' . $event->preview_image) }}" alt="{{ $event->title }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    @endforeach
                                </div><!-- /.swiper-wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Events End -->
