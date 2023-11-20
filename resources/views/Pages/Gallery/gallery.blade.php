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
                    <li>معرض الصور</li>
                    <li><span>/</span></li>
                    <li><a href="index.html">الرئيسية</a></li>

                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Portfolio Page Start-->
    <section class="portfolio-page">
        <div class="container">
            <div class="row">
                <!--Album  Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Reservoir_%28Jordan_University_of_Science_and_Technology%29.jpg"
                                    alt="">
                            </div>
                            <div class="portfolio-three__content">
                                <h3 class="portfolio-three__title"><a href="portfolio-details.html"> مدينة الرمثا</a></h3>
                                <span style="display: block; font-size: 14px; color: #999;">تصفح الصور
                                    <i
                                        style="display: inline-block; width: 0; height: 0; border-top: 4px solid transparent; border-bottom: 4px solid transparent; border-right: 6px solid #999; margin-left: 5px;"></i>
                                </span>
                            </div>
                            <div class="portfolio-three__arrow">
                                <a class="img-popup"
                                    href="https://upload.wikimedia.org/wikipedia/commons/4/49/Reservoir_%28Jordan_University_of_Science_and_Technology%29.jpg"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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




    </section>
    <!--Portfolio Page End-->







@endsection
