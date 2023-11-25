@extends('Layout.master')
@section('title', 'العطاءات')
@section('header_title', 'العطاءات')
@section('content')

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
                                        <a href="{{ route('showDetailsTenders', $tender->id) }}"
                                            class="btn btn-primary">المزيد</a>
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
