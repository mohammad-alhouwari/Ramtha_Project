<!-- News Section -->
<section class="news-one">
    <div class="container" dir="rtl">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">آخر الاخبار</span>
            <h2 class="section-title__title">آخر الاخبار في مدينة الرمثا</h2>
        </div>
        <div class="row">
            @foreach ($latestNews as $item)
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                {{-- Image --}}
                                <img src="{{ asset($item->preview_image) }}" alt="{{ $item->title }}">
                            </div>
                            <div class="news-one__date">
                                {{-- News Date --}}
                                <p>{{ $item->date }}</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            {{-- Title --}}
                            <h3 class="news-one__title"><a>{{ $item->title }}</a></h3>
                            <div class="news-one__btn">
                                <a href="{{ route('showDetailsNews', $item->id) }}">
                                    اقرأ
                                    المزيد
                                    <i class="icon-left-arrow"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            @endforeach
        </div>
    </div>
</section>
<!-- News Section End -->
