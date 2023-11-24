@extends('Layout.master')
@section('title', 'معرض الصور')
@section('header_title', 'معرض الصور')
@section('content')

    @if ($uniqueGallery->isEmpty())
        <section class="department-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">ألبوماتنا</span>
                    <h2 class="section-title__title">لا يوجد ألبومات لعرضها</h2>
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
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">ألبوماتنا</span>
                <h1>اكتشف معرض صور بلديةالرمثا</h1>
                <br>
            </div>
            <div class="portfolio-page-items">
                @foreach ($uniqueGallery as $item)
                    <a class="album-items"
                        href="{{ route('single_gallery', [
                            'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
                            'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event'),
                        ]) }}">
                        <div class="album-item">
                            @php
                                $image = '';
                                $title = '';
                                if ($item->project) {
                                    $image = $item->project->preview_image;
                                    $title = $item->project->title;
                                } elseif ($item->news) {
                                    $image = $item->news->preview_image;
                                    $title = $item->news->title;
                                } elseif ($item->event) {
                                    $image = $item->event->preview_image;
                                    $title = $item->event->title;
                                }
                            @endphp
                            <a href="{{ route('single_gallery', [
                                'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
                                'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event'),
                            ]) }}"
                                style="text-decoration: none; color: inherit;">
                                <img class="gallery-img-item" src="{{ asset($image) }}" alt="Photo">
                                <p class="gallery-p">{{ $title }}</p>
                            </a>
                            <hr class="hr-gallery">
                            <a class="single_gallery_item"
                                href="{{ route('single_gallery', [
                                    'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
                                    'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event'),
                                ]) }}">تصفح
                                الألبوم</a>
                        </div>
                    </a>
                @endforeach
            </div>



        </section>
    @endif

@endsection
