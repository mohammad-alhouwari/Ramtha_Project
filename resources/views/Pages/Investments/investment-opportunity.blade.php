@extends('Layout.master')
@section('title', 'Projects')

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
                <h2>{{ $investment ->name }}</h2>
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

     <section class="team-details">
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__left">
                                <div class="team-details__img">
                                    <img src="{{asset($investment->image)}}" alt="">
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name">{{ $investment->name }}</h3>
                                    <p class="team-details__top-text-1">وصف الفُرصة</p>
                                    
                                    
                                    <p class="team-details__top-text-2">{{ $investment->description }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Projects Page End-->
@endsection
