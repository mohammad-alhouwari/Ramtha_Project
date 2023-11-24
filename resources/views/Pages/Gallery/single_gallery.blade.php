@extends('Layout.master')
@section('title', 'معرض الصور')

@section('content')
<br>
<br>
<div class="section-title text-center">
    <div class="section-title__icon">
    <span class="fa fa-star"></span>
    </div>
    <span class="section-title__tagline">معرض الصور</span>
    <br>
    @if ($name)
    <h3> ألبوم صور {{ $name->title }} </h3>
    @endif
</div>
<br>
<div class="gallery">
    <div class="row-gallery">
        @foreach ($gallery as $index => $item)
            <div class="gallery-item">
                <a href="{{ asset($item->media) }}" data-fancybox="gallery" data-caption="Image {{ $index + 1 }}" data-src="{{ asset($item->media) }}">
                    <img src="{{ asset($item->media) }}" alt="Image {{ $index + 1 }}">
                </a>
            </div>
            @if (($index + 1) % 4 === 0 && $index !== count($gallery) - 1)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>
<br>
<br>
<br>

@endsection
