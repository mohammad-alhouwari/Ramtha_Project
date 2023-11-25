@extends('Layout.master')
@section('title', 'معرض الصور')
@section('header_title', 'معرض الصور')
@section('content')
    <br>
    @if ($name)
        <center>
            <h3> ألبوم صور {{ $name->title }} </h3>
        </center>
    @endif
    </div>
    <br>
    <div class="gallery">
        <div class="row-gallery">
            @foreach ($gallery as $index => $item)
                <div class="gallery-item">
                    <a href="{{ asset($item->media) }}" data-fancybox="gallery" data-caption="Image {{ $index + 1 }}"
                        data-src="{{ asset($item->media) }}">
                        <img src="{{ asset($item->media) }}" alt="Image {{ $index + 1 }}">
                    </a>
                </div>
            @endforeach
        </div>
        <br>
        <div class="gallery">
            <div class="row-gallery">
                @foreach ($gallery as $index => $item)
                    <div class="gallery-item">
                        <a href="{{ asset($item->media) }}" data-fancybox="gallery" data-caption="Image {{ $index + 1 }}"
                            data-src="{{ asset($item->media) }}">
                            <img src="{{ asset($item->media) }}" alt="Image {{ $index + 1 }}">
                        </a>
                    </div>
                    @if (($index + 1) % 4 === 0 && $index !== count($gallery) - 1)
            </div>
            <div class="row">
                @endif
                @endforeach
            </div>
        </div>
        <br>
        <br>
        <br>

    @endsection
