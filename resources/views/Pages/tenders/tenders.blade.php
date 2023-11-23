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
                                    <div class="feature-four__single">
                                        <div class="feature-four__img-box">
                                            <div class="feature-four__img">
                                                <img src="assets/images/backgrounds/tender.png" alt="">
                                            </div>
                                            {{-- <div class="feature-four__icon">
                                                <span class="fas fa-file-contract"></span>
                                            </div> --}}
                                        </div>
                                        <h3 class="feature-four__title"><a  href="{{ route('showDetailsTenders', $tender->id) }}"> {{ $tender->title }}</a></h3>
                                        <!-- Add Button under h3 -->
                                        <br>
                                        <a  href="{{ route('showDetailsTenders', $tender->id) }}" class="btn btn-primary">المزيد</a>
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
