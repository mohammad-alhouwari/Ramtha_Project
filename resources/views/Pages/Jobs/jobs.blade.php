@extends('Layout.master')
@section('title', 'فرص عمل')

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
                <h2>فرص العمل</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('showAllInvestments') }}">فرص العمل</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    @php use Illuminate\Support\Str; @endphp

    <!--investment Page Start-->
    @if ($jobs->isEmpty())
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">فرص العمل</span>
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
        <section class="feature-four">
            <div class="container" dir="rtl">
                <div class="row">
                    <!--Job Single Start-->
                    @foreach ($jobs as $job)
                        <div class="col-xl-4 col-lg-4">
                            <div class="feature-four__single">
                                <div class="feature-four__img-box">
                                    <div class="feature-four__img">
                                        <img src="{{$job->image}}" alt="">
                                    </div>
                                    <div class="feature-four__icon">
                                        <i class=" fs-3 text-white fas fa-briefcase"></i>                                    </div>
                                </div>
                                <h3 class="feature-four__title">
                                    <a href="{{route('showJob', $job->id)}}">{{$job->title}}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                    <!--Job Single End-->
                </div>
            </div>
        </section>
    @endif
    <!--investments Page End-->
@endsection
