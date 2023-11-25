<!-- كلمة الرئيس -->
<section class="history-one">
    @foreach ($presidents as $president)
        <div class="history-one__top">
            <div class="container" dir="rtl">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">كلمة الرئيس</span>
                    <h2 class="section-title__title">كلمة رئيس بلدية الرمثا الكبرى</h2>
                </div>
            </div>
        </div>
        <div class="history-one__bottom">
            <div class="history-one__wrap">
                <div class="history-one__shape-1">
                    <div style="background-color: #ccc; height: 100%;"></div>
                </div>
                <div class="container">
                    <div class="history-one__inner">
                        <div class="history-one__main-content">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="history-one__content-left">
                                        <img src="{{ asset($president->image) }}" alt="{{ $president->name }}"
                                            style="width: 400px; height:400px">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6" dir="rtl">
                                    <br>
                                  
                                    <div class="history-one__content-right">
                                        <h4 class="history-one__content-title">{{ $president->name }}</h4>
                                        <p class="history-one__content-text">
                                            {{ \Illuminate\Support\Str::limit($president->speech, 430) }}
                                        </p>
                                        <div class="contact-two__btn-box">
                                            <a href="/president"> <button type="submit" class="thm-btn contact-two__btn" > قراءة كلمة الرئيس </button> </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>

<!-- كلمة الرئيس -->
