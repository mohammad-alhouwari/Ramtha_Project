@extends('Layout.master')
@section('title', 'Ownership Transfer')
@section('header_title', 'طلب نقل الملكية')
@section('content')
    <!-- Ownership Transfer Page Start -->
    <section class="contact-two" dir="rtl">
        <div class="contact-two__bg">
        </div>
        <div class="container" dir="rtl">
            <div class="section-title text-center">
                <p class="section-title__title">طلب نقل الملكية</p>
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <p style="text-align: justify; margin-top: 2%">
                    نموذج طلب نقل الملكية للعقارات. يرجى ملء النموذج التالي بالمعلومات الصحيحة والكاملة.
                </p>
            </div>
            <div class="contact-two__form-box">
                <form action="{{ route('ownership_transfer.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <!-- Landlord's Phone -->
                        <div class="col-xl-12">
                            <label for="landlord_phone">رقم هاتف المالك الحالي</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم هاتف المالك الحالي" name="landlord_phone"
                                    value="{{ old('landlord_phone') }}" id="landlord_phone">
                                @error('landlord_phone')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- New Owner's Name -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="new_owner_name">اسم المالك الجديد</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="اسم المالك الجديد" name="new_owner_name"
                                    value="{{ old('new_owner_name') }}" id="new_owner_name">
                                @error('new_owner_name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- New Owner's Phone -->
                        <div class="col-xl-6">
                            <label for="new_owner_phone">رقم هاتف المالك الجديد</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم هاتف المالك الجديد" name="new_owner_phone"
                                    value="{{ old('new_owner_phone') }}" id="new_owner_phone">
                                @error('new_owner_phone')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Other Ownership Transfer Details -->
                    <div class="row">
                        <div class="col-xl-12">
                            <label for="national_id">الرقم الوطني</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الرقم الوطني" name="national_id"
                                    value="{{ old('national_id') }}" id="national_id">
                                @error('national_id')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="property_number">رقم العقار</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم العقار" name="property_number"
                                    value="{{ old('property_number') }}" id="property_number">
                                @error('property_number')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="municipality_name">اسم البلدية</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="مثل : الرمثا/ البويضة" name="municipality_name"
                                    value="{{ old('municipality_name') }}" id="municipality_name">
                                @error('municipality_name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <label for="basin">الحوض</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="الحوض" name="basin" value="{{ old('basin') }}"
                                    id="basin">
                                @error('basin')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="district">المنطقة</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="المنطقة" name="district" value="{{ old('district') }}"
                                    id="district">
                                @error('district')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <label for="land_number">رقم الأرض</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم الأرض" name="land_number"
                                    value="{{ old('land_number') }}" id="land_number">
                                @error('land_number')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <div class="contact-two__btn-box">
                        <button type="submit" class="thm-btn contact-two__btn">أرسل</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Ownership Transfer Page End -->

@endsection
