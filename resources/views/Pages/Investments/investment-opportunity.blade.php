@extends('Layout.master')
@section('title', 'الفُرص الإستثمارية')
@section('header_title', 'الفُرص الإستثمارية')
@section('content')

    @php use Illuminate\Support\Str; @endphp

    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__left">
                            <div class="team-details__img">
                                <img src="{{ asset($investment->image) }}" alt="">

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
