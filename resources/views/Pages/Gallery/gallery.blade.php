{{-- @extends('Layout.master')
@section('title', 'معرض الصور')

@section('content')

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>معرض الصور</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li>معرض الصور</li>
                    <li><span>/</span></li>
                    <li><a href="index.html">الرئيسية</a></li>

                </ul>
            </div>
        </div>
    </section>

<section class="portfolio-page">
    <div class="container">
        <div class="row">
            @foreach($gallery as $item)
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="portfolio-three__single">
                    <div class="portfolio-three__img-box">
                        <div class="portfolio-three__img">
                            @if($item->project)
                                <img src="{{ asset($item->project->preview_image) }}" alt="">
                            @elseif($item->news)
                                <img src="{{ asset($item->news->preview_image) }}" alt="">
                            @elseif($item->event)
                                <img src="{{ asset($item->event->preview_image) }}" alt="" style="opacity: 0.8;">
                            @endif
                        </div>
                        <div class="portfolio-three__content">
                            <h3 class="portfolio-three__title">
                                <a href="{{ route('single_gallery', ['id' => $item->id, 'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event')]) }}">
                                    {{ $item->project ? $item->project->title : ($item->news ? $item->news->title : $item->event->title) }}
                                </a>
                            </h3>
                            <span style="display: block; font-size: 14px; color: #ffffff;">تصفح الصور
                                <i style="display: inline-block; width: 0; height: 0; border-top: 4px solid transparent; border-bottom: 4px solid transparent; border-right: 6px solid #ffffff; margin-left: 5px;"></i>
                            </span>
                        </div>
                        <div class="portfolio-three__arrow">
                            <a class="img-popup" href=""><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

 --}}

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
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($uniqueGallery as $item)
        <a href="{{ route('single_gallery', [
            'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
            'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event')
        ]) }}" style="color: #ffffff; text-decoration: none; transition: color 0.3s ease;">
            <div style="width: 320px; padding: 10px; background-color: #fff; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); border-radius: 8px; text-align: center; height: auto; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden;">
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
                    <img src="{{ asset($image) }}" alt="Photo" style="width: 300px; height: 250px; border-radius: 6px; transition: transform 0.3s ease-in-out;">
                    <p style="margin-top: 12px; font-size: 17px; color: #666;">{{ $title }}</p>
                </a>
                <hr style="margin: 6px 0; border: 0; border-top: 1px solid #ccc;">
                <a href="{{ route('single_gallery', [
                    'id' => $item->project ? $item->project->id : ($item->news ? $item->news->id : $item->event->id),
                    'type' => $item->project ? 'project' : ($item->news ? 'news' : 'event')
                ]) }}" style="display: block; font-size: 16px; color: #383737; text-decoration: none; transition: color 0.3s ease-in-out; margin-bottom: 10px;">تصفح الألبوم</a>
            </div>
        </a>
        @endforeach
    </div>
    
    <style>
        /* Add styles for hover effect */
        div[style*="width: 320px;"] img {
            transition: transform 0.3s ease-in-out;
        }
    
        div[style*="width: 320px;"]:hover img {
            transform: scale(1.05); /* Adjust the scale value for the desired zoom effect */
        }
    
        div[style*="width: 320px;"]:hover {
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.7); /* Adjust the box-shadow for the hover effect */
        }
    </style>
    
</section>
{{-- <div class="container mt-4">
            {{ $gallery->links() }}
</div> --}}
@endsection

