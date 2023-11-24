@extends('Layout.master')
@section('title', 'الافكار والمبادرات')
@section('header_title', 'الافكار والمبادرات')
@section('content')
    <!-- Ideas Submission Page Start -->
    @include('sweetalert::alert')

    <section class="contact-two" dir="rtl">
        <div class="contact-two__bg">
        </div>
        <div class="container" dir="rtl">
            <div class="section-title text-center">
                <p class="section-title__title">تقديم الأفكار والمبادرات</p>
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <p style="text-align: justify; margin-top: 2%">
                    نظرًا لاهتمامنا بالابتكار وتحفيز ثقافة الأفكار الجديدة، قمنا بتيسير عملية تقديم الأفكار والمبادرات عبر
                    موقعنا.
                    هدفنا هو توفير الفرصة لكم للمساهمة بأفكاركم الرائعة. فأيها المواطن الكريم، أيتها المواطنة الكريمة، حان
                    وقتكم لتقديم أفكاركم ومساهماتكم إلى بلدية الرمثا الكبرى.
                    يُمكنكم تقديم أي فكرة من أي مكان وفي أي وقت.
                </p>

            </div>
            <div class="contact-two__form-box">
                <form action="{{ route('suggestions.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <!-- Your Name -->
                        <div class="col-xl-6">
                            <label for="name">الاسم</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الاسم" name="name" value="{{ old('name') }}"
                                    id="name">
                                @error('name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <!-- Phone Number -->
                        <div class="col-xl-6">
                            <label for="phone">رقم الهاتف</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم الهاتف" name="phone" value="{{ old('phone') }}"
                                    id="phone">
                                @error('phone')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <!-- Sector and Place -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="sector">القطاع</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="القطاع" name="sector" value="{{ old('sector') }}"
                                    id="sector">
                                @error('sector')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="place">المكان</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="المكان" name="place" value="{{ old('place') }}"
                                    id="place">
                                @error('place')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Idea description -->
                    <div class="row">
                        <div class="col-xl-12">
                            <label for="description">تفاصيل الفكرة</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box text-message-box">
                                <textarea name="description" placeholder="تفاصيل الفكرة" id="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <p style="text-align: justify; margin-top: 6%">
                                ملاحظة: جميع الحقول المسبوقة بـــ
                                <span style="color: red;">*</span>
                                إجبارية وفي حالة عدم إدخال أي من هذه البيانات ستظهر رسالة باللون الأحمر تطلب إدخال بيانات
                                الحقل
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

    <!-- Ideas Submission Page End -->

@endsection
