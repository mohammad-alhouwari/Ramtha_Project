@extends('Layout.master')
@section('title', 'Complains')


@section('content')

    <!--Departments Page Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2> عطاءات بلدية الرمثا الكبرى</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li>العطاءات</li>
                </ul>
            </div>
        </div>
    </section>





    <section class="department-page">
        <div class="container">
          
            <div class="row">
                <!--Department Two Single Start-->
                 <!--Feature Five Start-->
        <section class="feature-five">
                <div class="container">
                    <div class="row">
                      @foreach ($tenders as $tender)
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4">
                                <div class="feature-one__single">
                                    <div class="feature-one__img-box">
                                        <div class="feature-one__img">
                                            <img src="assets/images/backgrounds/tender.jpg" height="350px"  alt="" style="filter: brightness(0.7);">

                                            {{-- <img src="assets/images/backgrounds/feature-1-1.jpg" alt=""> --}}
                                        </div>
                                        <div class="feature-one__content">
                                            <div class="feature-one__icon">
                                                {{-- <span class="icon-history"></span> --}}
                                                <span class="fas fa-file-contract"></span>

                                            </div>
                                           
                                            <h3 class="feature-one__title" style="direction: rtl;" > {{ $tender->title }}
                                        </div>
                                        <div class="feature-one__content-two">
                                            <div class="feature-one__content-two-top">
                                                <div class="feature-one__icon-2">
                                                    <span class="fas fa-file-contract"></span>

                                                    {{-- <span class="icon-cityscape"></span> --}}
                                                </div>
                                                <h3 class="feature-one__title-2"><a href="{{ route('showDetailsTenders', $tender->id) }}"> {{ $tender->title }}</a></h3>
                                            </div>
                                            <div class="feature-one__content-two-bottom">
                                                <p class="feature-one__content-two-text"> {{ $tender->description }}</p>
                                                <div class="feature-one__content-two-btn-box">
                                                    <a href="{{ route('showDetailsTenders', $tender->id) }}" class="feature-one__content-two-read-more">إقرأ المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <!--Feature One Single End-->
                    </div>
                </div>
            </section>
            <!--Feature Five End-->
                <!--Department Two Single End-->
             
              
                <!--Department Two Single End-->
             
            </div>
        </div>
    </section>
    <!--Departments Page End-->
@endsection

