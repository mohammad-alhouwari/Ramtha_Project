
@extends('Layout.master')
@section('title', 'معرض الصور')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>معرض الصور</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index">الرئيسية</a></li>
                    <li><span>/</span></li>
                    <li>معرض الصور</li>

                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

<section class="portfolio-page"> 
    <div class="portfolio-page-items" >
        @foreach($uniqueGallery as $item)
        <a class="album-items" href="{{ route('single_gallery', [
            'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
            'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event')
        ]) }}" >
            <div class="album-item">
                @php
                    $image = '';
                    $title = '';
                    if($item->project) {
                        $image = $item->project->preview_image;
                        $title = $item->project->title;
                    } elseif($item->news) {
                        $image = $item->news->preview_image;
                        $title = $item->news->title;
                    } elseif($item->event) {
                        $image = $item->event->preview_image;
                        $title = $item->event->title;
                    }
                @endphp
                <a href="{{ route('single_gallery', [
                    'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
                    'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event')
                ]) }}" style="text-decoration: none; color: inherit;">
                    <img class="gallery-img-item" src="{{ asset($image) }}" alt="Photo" >
                    <p class="gallery-p">{{ $title }}</p>
                </a>
                <hr class="hr-gallery">
                <a class="single_gallery_item" href="{{ route('single_gallery', [
                    'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
                    'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event')
                ]) }}" >تصفح الألبوم</a>
            </div>
        </a>
        @endforeach
    </div>
    

    
</section>

@endsection

