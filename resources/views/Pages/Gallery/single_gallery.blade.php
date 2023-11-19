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
    <br>
    <h2 class="section-title__title">صور مدينة الرمثا </h2>
</div>
<main class="gallery" >
  <div class="gallery-container">
      <div class="gallery-item">
          <div class="gallery-image">
              <a href="https://www.ahdath24.com/image.php?token=f1affdf90dbbeb394fcf8a8edd05e5e6&size=" data-fancybox="gallery" data-caption="Caption Images 1">
                  <img src="https://www.ahdath24.com/image.php?token=f1affdf90dbbeb394fcf8a8edd05e5e6&size=" alt="Gallery Image">
              </a>
              <a class="download-button" href="https://www.ahdath24.com/image.php?token=f1affdf90dbbeb394fcf8a8edd05e5e6&size=" download="Image_1.jpg">Download</a>
          </div>
      </div>
    <div class="gallery-item">
      <div class="gallery-image">
        <a href="https://irbiddotcity.files.wordpress.com/2020/04/92817984_1567278693448143_1090215420171911168_o.jpg?resize=600" data-fancybox="gallery" data-caption="Caption Images 1">
            <img src="https://irbiddotcity.files.wordpress.com/2020/04/92817984_1567278693448143_1090215420171911168_o.jpg?resize=600" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="gallery-item">
        <div class="gallery-image">
          <a href="https://upload.wikimedia.org/wikipedia/commons/4/49/Reservoir_%28Jordan_University_of_Science_and_Technology%29.jpg" data-fancybox="gallery" data-caption="Caption Images 2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Reservoir_%28Jordan_University_of_Science_and_Technology%29.jpg" alt="Gallery Image">
          </a>
        </div>
      </div>
      <div class="gallery-item">
        <div class="gallery-image">
          <a href="https://th.bing.com/th/id/OIP.Ob3RHiDzrFRT69w5G0XTNAHaE9?pid=ImgDet&rs=1" data-fancybox="gallery" data-caption="Caption Images 2">
            <img src="https://th.bing.com/th/id/OIP.Ob3RHiDzrFRT69w5G0XTNAHaE9?pid=ImgDet&rs=1" alt="Gallery Image">
          </a>
        </div>
      </div>
      <div class="gallery-item">
      <div class="gallery-image">
        <a href="https://i.pinimg.com/originals/ef/e3/b3/efe3b399c07e5973888229b5826e7948.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
            <img src="https://i.pinimg.com/originals/ef/e3/b3/efe3b399c07e5973888229b5826e7948.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
  </div>

</main>

<br>
    <div class="container">
        <ul class="pagination">
          <li>
            <a href="#">التالي</a>
          </li>
          <li>
            <a href="#">4</a>
          </li>
          <li class="active">
            <a href="#">3</a>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">1</a>
          </li>
          <li>
            <a href="#">السابق</a>
          </li>
        </ul>
      </div>
      <br>


@endsection