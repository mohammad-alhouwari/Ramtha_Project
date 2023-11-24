@extends('Layout.master')
@section('title', 'اهم المعالم')
@section('header_title', 'اهم المعالم')
@section('content')

    @php use Illuminate\Support\Str; @endphp

    <!--Landmarks Page Start-->
    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__left">
                            <div class="team-details__img">
                                <img src="{{ asset($landmark->preview_image) }}" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__right">
                            <div class="team-details__top-content">
                                <h3 class="team-details__top-name">{{ $landmark->title }}</h3>
                                <p class="team-details__top-text-1">{{ $landmark->location }}</p>
                                <p class="team-details__top-text-2">{{ $landmark->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Landmarks Page End-->
@endsection
