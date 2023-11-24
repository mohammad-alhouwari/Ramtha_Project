@extends('Layout.master')
@section('title', 'الفُرص الإستثمارية')
@section('header_title', 'الفُرص الإستثمارية')

@section('content')
    <!--Page Header End-->
    @php use Illuminate\Support\Str; @endphp

    <!--investment Page Start-->
    @if ($investments->isEmpty())
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">فرصُنا الإستثمارية</span>
                    <h2 class="section-title__title">لا يوجد فُرص لعرضها</h2>
                </div>
                <div class="row">
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn thm-btn">العودة الى الصفحة الرئيسية</a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="portfolio-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">فرصُنا الإستثمارية</span>
                    <h2 class="section-title__title">اكتشف الفرص الاستثمارية في بلدية <br>الرمثا</h2>
                </div>
                <div class="row">
                    @foreach ($investments as $investment)
                        <!--Portfolio Page Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 test">
                            <div class="portfolio-page__single">
                                <div class="portfolio-page__img-box">
                                    <div class="portfolio-page__img">
                                        <img src={{ asset($investment->image) }} alt="">
                                    </div>
                                    <div class="investments-page__content">
                                        <p class="portfolio-page__sub-title">الفُرصة الإستثمارية</p>
                                        <h4 class="portfolio-page__title"><a
                                                href="{{ route('showInvestment', $investment->id) }}">{{ $investment->name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    @endif
    <!--investments Page End-->
@endsection
