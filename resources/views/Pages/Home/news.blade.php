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
        <div class="row rownews">
            @foreach ($latestNews as $item)
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 news-div wow fadeInUp" data-wow-delay="100ms" >
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                {{-- Image --}}
                                <img class="news-img" src="{{ asset($item->preview_image) }}" alt="{{ $item->title }}">
                            </div>
                            <div class="news-one__date">
                                {{-- News Date --}}
                                <p>{{ $item->date }}</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            {{-- Title --}}
                            <h3 class="news-one__title"><a href="{{ route('showDetailsNews', $item->id) }}">{{ $item->title }}</a></h3>
{{-- Check if the item's description exists --}}
@if ($item->description)
    {{-- Split the description into words --}}
    @php
        $words = explode(' ', $item->description);
        $limitedWords = implode(' ', array_slice($words, 0, 10));
    @endphp

    {{-- Display the first 10 words and 'Read more' link --}}
    <p>
        {{ $limitedWords }}
        <a style="color: var(--govity-base)" href="{{ route('showDetailsNews', $item->id) }}">اقرأ المزيد</a>
    </p>
@endif

                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            @endforeach
        </div>
    </div>
</section>
<!-- News Section End -->
