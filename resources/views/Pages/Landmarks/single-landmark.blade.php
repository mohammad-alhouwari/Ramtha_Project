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
            @if ($landmarkImages && count($landmarkImages) > 0)
                <h4 class="about-two__progress-title"> صور {{ $landmark->title }} :</h4>
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" lang="en" dir="ltr"
                    data-owl-options='{
                                    "items": 3,
                                    "margin": 30,
                                    "smartSpeed": 3000,
                                    "loop": true,
                                    "autoplay": false,  <!-- Change this line to enable autoplay -->
                                    "autoplayTimeout": 6000,  <!-- Set the autoplay timeout (in milliseconds) -->
                                    "nav": false,
                                    "dots": false,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>", "<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 3
                                        },
                                        
                                    }
                                }'>
                    @foreach ($landmarkImages as $landmarkImage)
                        <div class="brand-one__single">
                            <div class=" items">
                                <img src="{{ asset($landmarkImage->media) }}" alt="Image1" style="margin: 10px"
                                    width="200px" />
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!--Landmarks Page End-->
@endsection
