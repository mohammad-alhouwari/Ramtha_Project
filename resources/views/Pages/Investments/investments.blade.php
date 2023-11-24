@extends('Layout.master')
@section('title', 'Investments Opportunity')

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>الفُرص الإستثمارية</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('showAllInvestments') }}">الفُرص الإستثمارية</a></li>
                </ul>
            </div>
        </div>
    </section>
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
                <div class="row">
                    @foreach ($investments as $investment)
                        <!--Portfolio Page Single Start-->
                        <div  class="col-xl-4 col-lg-6 col-md-6 test">
                            <div class="portfolio-page__single">
                                <div class="portfolio-page__img-box">
                                    <div class="portfolio-page__img">
                                        <img src={{ asset($investment->image) }} alt="">
                                    </div>
                                    <div class="investments-page__content">
                                        <p class="portfolio-page__sub-title">الفُرصة الإستثمارية</p>
                                        <h4 class="portfolio-page__title"><a href="{{ route('showInvestment', $investment->id) }}">{{ $investment->name }}</a></h4>
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
