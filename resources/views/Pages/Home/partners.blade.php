<!-- Slider Section -->
<section class="brand-one">
    <div class="container">
        <div class="brand-one__title" dir="ltr" lang="en">
            <p style="font-size: 25px;">شركاؤنا</p>
        </div>
        <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" lang="en" dir="ltr"
            data-owl-options='{
            "items": 3,
            "margin": 30,
            "smartSpeed": 700,
            "loop": true,
            "autoplay": true,
            "autoplayTimeout": 6000,
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
                "992": {
                    "items": 5
                }
            }
        }'>
            <!-- Brand One Single -->
            @foreach ($partners as $partner)
                <div class="brand-one__single">
                    <div class="brand-one__img">
                        {{-- link --}}
                        <a href="{{ $partner->link }}" target="_blank">
                            {{-- logo --}}
                            <img src="{{ asset($partner->logo) }}" style="max-height: 90px;">
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Brand One Single -->
        </div>
    </div>
</section>
