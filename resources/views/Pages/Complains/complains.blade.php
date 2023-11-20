@extends('Layout.master')
@section('title', 'Complains')
@section('content')

    <!--Contact Page Contact Start-->
  
    <section class="contact-two" dir="rtl">
        <div class="contact-two__bg">
        </div>
        <div class="container" dir="rtl">
            <div class="section-title text-center">
                <p class="section-title__title">تقدم بشكوى</p>
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>

                <p style="text-align: justify; margin-top: 2%">نظرًا لحرصنا على تقديم أفضل الخدمات لمتلقي الخدمة، قمنا
                    بتيسير
                    عملية تقديم
                    الشكاوى عبر موقعنا. هدفنا هو توفير وقتكم الثمين، فأيها المواطن الكريم، أيتها المواطنة الكريمة، حتى يتسنى
                    لنا معالجة الشكاوى بسرعة. يُمكنكم تقديم أي شكوى من أي مكان وفي أي وقت.
                </p>

            </div>
            <div class="contact-two__form-box">
                <form action="{{ route('complains.store') }}" method="POST" class="contact-two__form contact-form-validated" novalidate="novalidate">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="name">الاسم</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الاسم" name="name" id="name">
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="col-xl-6">
                            <label for="email">البريد الإلكتروني</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="email" placeholder="البريد الإلكتروني" name="email" id="email">
                            </div>
                        </div>
                    </div>

                    <!-- Applicant ID and Mobile Number -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="national_id">الرقم الوطني</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الرقم الوطني" name="national_id" id="national_id">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="phone">رقم الهاتف</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم الهاتف" name="phone" id="phone">
                            </div>
                        </div>
                    </div>
                    <!-- Area and Building Number -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="complain_type">نوع الشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="نوع الشكوى" name="complain_type" id="complain_type">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="address"> موقع الشكوى</label>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder=" موقع الشكوى" name="address" id="address">
                            </div>
                        </div>

                    </div>

                    <!-- Complaint Details -->

                    <div class="row">
                        <div class="col-xl-12">
                            <label for="complain_details">تفاصيل الشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box text-message-box">
                                <textarea name="complain_details" placeholder="تفاصيل الشكوى" id="complain_details"></textarea>
                            </div>
                            <div class="col-xl-12">
                                <label for="image">أرفق صوره </label>
                                <div class="contact-two__input-box">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <p style="text-align: justify; margin-top: 2%">
                                ملاحظة: جميع الحقول المسبوقة بـــ
                                <span style="color: red;">*</span>

                                إجبارية و في حالة عدم إدخال أي من هذه البيانات ستظهر رسالة
                                باللون الأحمر تطلب إدخال بيانات الحقل
                            </p>
                            <div class="contact-two__btn-box">
                                <button type="submit" class="thm-btn contact-two__btn">ارسل</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--Contact Page Contact End-->

@endsection
