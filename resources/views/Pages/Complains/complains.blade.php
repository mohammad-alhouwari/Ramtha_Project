@extends('Layout.master')
@section('title', 'الشكاوي والمقترحات')
@section('header_title', 'الشكاوي والمقترحات')
@section('content')

    <!--Contact Page Contact Start-->
    <br><br>
    <section class="contact-two" dir="rtl">
        @include('sweetalert::alert')

        <div class="contact-two__bg">
        </div>
        <div class="container" dir="rtl">
            <div class="section-title text-center">
                <p class="section-title__title"> تقديم الشكاوي والاقتراحات</p>
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
                <form action="{{ route('complains.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="name">الاسم</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الاسم" name="name" id="name"
                                    value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="col-xl-6">
                            <label for="email">البريد الإلكتروني</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="email" placeholder="البريد الإلكتروني" name="email" id="email"
                                    value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Applicant ID and Mobile Number -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="national_id">الرقم الوطني</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الرقم الوطني" name="national_id" id="national_id"
                                    value="{{ old('national_id') }}">
                            </div>
                            @error('national_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-6">
                            <label for="phone">رقم الهاتف</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم الهاتف" name="phone" id="phone"
                                    value="{{ old('phone') }}">
                            </div>
                            @error('phone')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- Area and Building Number -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="complain_type">نوع الشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="نوع الشكوى" name="complain_type" id="complain_type"
                                    value="{{ old('complain_type') }}">
                            </div>
                            @error('complain_type')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-6">
                            <label for="address"> موقع الشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder=" موقع الشكوى" name="address" id="address"
                                    value="{{ old('address') }}">
                            </div>
                            @error('address')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <!-- Complaint Details -->

                    <div class="row">
                        <div class="col-xl-12">
                            <label for="complain_details">تفاصيل الشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box text-message-box">
                                <textarea name="complain_details" placeholder="تفاصيل الشكوى" id="complain_details"
                                    value="{{ old('complain_details') }}"></textarea>
                            </div>
                            @error('complain_details')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror

                            <div class="row">
                                <div class="col-xl-2">
                                    <div class="mb-5">
                                        <img id="showImage" width="100px" src="{{ url('no-image.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-xl-10">
                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium" for="image">أرفق صوره</label>
                                        <div class="mb-5">
                                            <div class="input-group mb-3">

                                                <input type="file" class="form-control" name="image" id="image"
                                                    value="{{ old('image') }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
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
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <!-- Include SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Image Update -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        });
    </script>
@endsection
