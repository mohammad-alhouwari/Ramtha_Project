@extends('Layout.master')
@section('title', 'Complains')

@section('content')

    <!--Contact Page Contact Start-->
    <section class="contact-two" dir="rtl">
        <div class="contact-two__bg" style="background-image: url(assets/images/backgrounds/Reservoir.jpg);">
        </div>
        <div class="container" dir="rtl">
            <div class="section-title text-center">
                <p class="section-title__title">تقدم بشكوى</p>
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>

                <p style="text-align: justify; margin-top: 2%">نظرًا لحرصنا على تقديم أفضل الخدمات لمتلقي الخدمة، قمنا بتيسير
                    عملية تقديم
                    الشكاوى عبر موقعنا. هدفنا هو توفير وقتكم الثمين، فأيها المواطن الكريم، أيتها المواطنة الكريمة، حتى يتسنى
                    لنا معالجة الشكاوى بسرعة. يُمكنكم تقديم أي شكوى من أي مكان وفي أي وقت.
                </p>
                <p style="text-align: justify; margin-top: 2%; color: red;">
                    اخي المواطن اختي المواطنة :
                    <br>
                    - سيتم الغاء الشكاوي المكررة لذا يرجى عدم تقديم اكثر من شكوى لنفس الموضوع.
                    <br>
                    - سيتم الغاء الشكاوي التي لا تحتوي على عنوان صحيح وواضح (المنطقة التي تتبع لها / اسم شارع / رقم بناية)
                    وخصوصا للشكاوي السرية.
                    <br>
                    حيث سيتم ارسال رسالة اعتذار عن تقديم الخدمة.
                </p>
                <p style="text-align: justify; margin-top: 2%">
                    ملاحظة: جميع الحقول المسبوقة بـــ
                    <span style="color: red;">*</span>

                    إجبارية و في حالة عدم إدخال أي من هذه البيانات ستظهر رسالة
                    باللون الأحمر تطلب إدخال بيانات الحقل
                </p>
            </div>
            <div class="contact-two__form-box">
                <form action="https://layerdrops.com/govity/main-html/assets/inc/sendemail.php"
                    class="contact-two__form contact-form-validated" novalidate="novalidate">

                    <!-- Your Name -->
                    <div class="row">
                        <div class="col-xl-12">
                            <hr>
                            <h5 style="text-align: center; color: #0063ae;">معلومات  المتقدم بالشكوى</h5>
                            <hr>
                        </div>
                    </div>
                    <br>
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
                            <label for="applicant_id">رقم الهوية لمقدم الطلب</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم الهوية لمقدم الطلب" name="applicant_id"
                                    id="applicant_id">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="mobile_number">رقم الموبايل</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم الموبايل" name="mobile_number" id="mobile_number">
                            </div>
                        </div>
                    </div>

                    <!-- Applicant Email and Accused -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label>الجنسية</label>
                            <span style="color: red;">*</span>
                            <br>
                            <div class="contact-two__input-box">
                                <input type="radio" name="nationality" id="jordanian" value="Jordanian">
                                <label for="jordanian" style="margin-left: 5%; margin-top: 3%">أردني</label>

                                <input type="radio" name="nationality" id="non_jordanian" value="Non-Jordanian">
                                <label for="non_jordanian">غير أردني</label>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="accused">المشتكي عليه</label>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="المشتكي عليها - ان وجد - " name="accused" id="accused">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-xl-12">
                            <h5 style="text-align: center; color: #0063ae;">تفاصيل الشكوى</h5>
                            <hr>
                        </div>
                    </div>
                    <!-- Complaint Topic -->
                        <div class="col-xl-12">
                            <label for="complaint_topic">موضوع الشكوى</label>
                            <span style="color: red;">*</span>

                            <br>
                            
                            <select  class="col-xl-12" name="complaint_topic" id="complaint_topic">
                                <option value="" disabled selected>اختر نوع الشكوى المراد تقديمها</option>

                                <optgroup label="شكاوى/ المناطق">
                                    <option value="remove_sheds">ازالة المعرشات</option>
                                    <option value="remove_stalls">ازالة بسطات</option>
                                    <option value="trimmed_trees_debris">ازالة مخلفات تقليم اشجار</option>
                                    <option value="cement_blocks">ازالة مطبات اسمنتية عشوائيه</option>
                                    <option value="front_recession_utilization">استغلال ارتداد امامي</option>
                                    <option value="sidewalk_utilization">استغلال رصيف / عوائق</option>
                                    <option value="construction_works_continuation">استمرار اعمال انشائيه لساعات متاخره
                                    </option>
                                    <option value="neighboring_structures_affected_by_excavations">تأثر منشات مجاوره لحفريات
                                    </option>
                                    <option value="water_accumulations">تجمعات مياه/مياه امطار</option>
                                    <option value="waste_accumulation">تراكم نفايات</option>
                                    <option value="cleaning_drainage_channels">تنظيف مناهل الامطار</option>
                                    <option value="waste_burning">حرق نفايات</option>
                                    <option value="violations_excavations">حفريات مخالفة</option>
                                    <option value="abandoned_excavations">حفريات مهجوره</option>
                                    <option value="cement_and_iron_barriers_obstacles">حواجز اسمنتيه وحديديه / عوائق
                                    </option>
                                    <option value="water_entering_buildings">دخول مياه الى الابنيه</option>
                                    <option value="building_complaints_violations">شكاوي ابنيه / منشات مخالفه</option>
                                    <option value="complaint_on_unlicensable_building">شكوى على ابنيه لا يمكن ترخيصها
                                    </option>
                                    <option value="complaint_on_area_department_performance">شكوى على اداء منطقة/دائره
                                    </option>
                                    <option value="complaint_on_change_of_building_use_professional">شكوى على تغيير صفة
                                        الاستعمال لجزء من بناء ( المهني</option>
                                    <option value="complaint_on_change_of_building_use_health">شكوى على تغيير صفة الاستعمال
                                        لجزء من بناء (صحي)</option>
                                    <option value="complaint_on_subsurface_structure_excavation">شكوى على حفرية بنية تحتية
                                    </option>
                                    <option value="container_maintenance">صيانة حاويات</option>
                                    <option value="debris_disposal">طرح انقاض</option>
                                    <option value="lack_of_public_safety_conditions">عدم توفر شروط السلامة العامه في
                                        المنشأة
                                    </option>
                                    <option value="no_milling_passage">عدم مرور طاحنات</option>
                                    <option value="sand_throwing">قذف رملي</option>
                                    <option value="dumping_random_rubble">قلابات تطرح طمم عشوائي</option>
                                    <option value="street_cleanliness">نظافة شوارع</option>
                                    <option value="courtyard_cleanliness">نظافه ساحات</option>
                                    <option value="construction_obstacles_in_street_capacity">وجود عوائق انشائيه في سعة
                                        الشارع</option>
                                    <option value="building_materials_and_debris_in_street_capacity">وجود مواد ومخلفات
                                        ابنية في سعة الشارع</option>
                                    <option value="waste_around_containers">وجود نفايات حول الحاويات</option>
                                </optgroup>
                                <optgroup label="الشكاوي الصحية والمكاره على الأفراد والمنشآت">
                                    <option value="individuals_homes_odors">أفراد-منازل/إحداث روائح أو صوت تضر الصحة
                                        أوالآخرين</option>
                                    <option value="individuals_homes_discharge_waste_water">أفراد-منازل/إفراغ مياه عادمة في
                                        أماكن غيرمخصص لها</option>
                                    <option value="individuals_homes_animal_breeding_damage">أفراد-منازل/تربية حيوانات تؤدي
                                        إلى ضرر-عدا المرخص</option>
                                    <option value="individuals_homes_excavations_channels">أفراد-منازل/حفر أو قنوات تتجمع
                                        فيها المياه العادمة</option>
                                    <option value="individuals_homes_waste_disposal">أفراد-منازل/طرح نفايات خارج الأماكن
                                        المخصصة</option>
                                    <option value="individuals_homes_unclean_property">أفراد-منازل/عدم نظافة العقار المشغول
                                        أو ملحقاته</option>
                                    <option value="individuals_homes_action_harm_health">أفراد-منازل/عمل يلحق الضرر بالصحة
                                        ويقلق الراحة</option>
                                    <option value="individuals_homes_smoking_complaints">أفراد-منازل/وجود مدخنة تلحق الضرر
                                        بالغير</option>
                                    <option value="individuals_smoking_complaints">أفراد/ شكاوي تدخين</option>
                                    <option value="commercial_display_food_sidewalk">منشأة تجارية / عرض مواد غذائيه على
                                        الرصيف</option>
                                    <option value="commercial_violations_health_conditions">منشأة تجارية / مخالفات اشتراطات
                                        صحيه</option>
                                    <option value="commercial_operation_without_license">منشأة تجارية / ممارسه مهنه بدون
                                        ترخيص</option>
                                    <option value="commercial_expired_food_items">منشأة تجارية / مواد غذائية منتهية
                                        الصلاحية</option>
                                    <option value="commercial_smoking_complaints">منشأة تجارية/ شكاوي تدخين</option>
                                    <option value="commercial_excavations_channels">منشأة تجارية/إحداث حفر أو قنوات تحتوي
                                        مياه العادمة</option>
                                    <option value="commercial_odors_sound_affect_health">منشأة تجارية/إحداث روائح أو صوت
                                        تضر الصحة والآخرين</option>
                                    <option value="commercial_discharge_waste_water">منشأة تجارية/إفراغ مياه عادمة في أماكن
                                        غيرمخصص لها</option>
                                    <option value="commercial_breeding_animals_damage">منشأة تجارية/تربية حيوانات تؤدي إلى
                                        ضرر-عدا المرخص</option>
                                    <option value="commercial_waste_disposal">منشأة تجارية/طرح نفايات خارج الأماكن المخصصة
                                    </option>
                                    <option value="commercial_unclean_property">منشأة تجارية/عدم نظافة العقار المشغول أو
                                        ملحقاته</option>
                                    <option value="commercial_action_harm_health">منشأة تجارية/عمل يلحق الضرر بالصحة ويقلق
                                        الراحة</option>
                                    <option value="commercial_smoking_chimney">منشأة تجارية/وجود مدخنة تلحق الضرر بالغير
                                    </option>
                                </optgroup>
                                <optgroup label="شكاوى /التخطيط">
                                    <option value="planning_complaint_advertisement_board">شكوى على لوحه اعلانيه</option>
                                </optgroup>
                                <optgroup label="شكاوى/د.الشؤون الاجتماعيه">
                                    <option value="social_affairs_maintenance_sports_facilities">صيانة مرافق رياضيه
                                    </option>
                                    <option value="social_affairs_library_cleanliness">نظافة المكتبه</option>
                                </optgroup>
                                <optgroup label="شكاوى دائره الانشاءات">
                                    <option value="construction_department_frame_sidewalk_maintenance">صيانة اطاريف و ارصفة
                                    </option>
                                    <option value="construction_department_retaining_wall_maintenance">صيانة جدار استنادي
                                    </option>
                                    <option value="construction_department_maintenance_and_insertion_walls_fences">صيانة و
                                        ادراج او اسوار</option>
                                </optgroup>
                                <optgroup label="شكاوى صيانه و الطرق">
                                    <option value="maintenance_lifting_installing_manhole">رفع و تنزيل و تركيب منهل
                                    </option>
                                    <option value="maintenance_excavations_or_subsidence">صيانة و حفريات او هبوط</option>
                                </optgroup>
                            </select>
                        </div>
                    
                    <!-- Area and Building Number -->
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="area">المنطقة</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم البناء/العمارة" name="area" id="area">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="building_number">أقرب موقع للشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="أقرب موقع للشكوى" name="building_number"
                                    id="building_number">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label for="building_number"> إسم الشارع  </label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder=" إسم الشارع " name="building_number"
                                    id="building_number">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label for="building_number">رقم البناء/العمارة</label>
                            <div class="contact-two__input-box">
                                <input type="text" placeholder="رقم البناء/العمارة" name="building_number"
                                    id="building_number">
                            </div>
                        </div>
                    </div>

                    <!-- Complaint Details -->
                    <div class="row">
                        <div class="col-xl-12">
                            <label for="complaint_details">تفاصيل الشكوى</label>
                            <span style="color: red;">*</span>
                            <div class="contact-two__input-box text-message-box">
                                <textarea name="complaint_details" placeholder="تفاصيل الشكوى" id="complaint_details"></textarea>
                            </div>
                            <div class="contact-two__btn-box">
                                <button type="submit" class="thm-btn contact-two__btn">ارسل الشكوى</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Page Contact End-->


{{--     
    <section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="billing_details">
                        <div class="billing_title">
                            <p>Returning customer? <a href="#">Click here to Login</a></p>
                            <h2>Billing details</h2>
                        </div>
                        <form class="billing_details_form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <div class="select-box">
                                            <select class="selectpicker">
                                                <option data-display="Select a Country">Select a Country</option>
                                                <option value="1">Canada</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="first_name" value="" placeholder="First Name"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="last_name" value="" placeholder="Last Name"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="company_name" value="" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="Address" value="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="company_name" value=""
                                            placeholder="Appartment, Unit, etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="Town/City" value="" placeholder="Town / City"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="State" value="" placeholder="State" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input name="email" type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                            required="" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checked-box">
                                        <input type="checkbox" name="skipper1" id="skipper" checked="">
                                        <label for="skipper"><span></span>Create an account?</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6">
                    <div class="billing_details ship_different_address">
                        <div class="billing_title ship_different_address_title">
                            <h2>Ship to a different address <span class="fa fa-check"></span></h2>
                        </div>
                        <form class="billing_details_form ship_different_address_form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <div class="select-box">
                                            <select class="selectpicker">
                                                <option data-display="Select a Country">Select a Country</option>
                                                <option value="1">Canada</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="first_name" value="" placeholder="First Name"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="last_name" value="" placeholder="Last Name"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="company_name" value="" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="Address" value="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="company_name" value=""
                                            placeholder="Appartment, Unit, etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <input type="text" name="Town/City" value="" placeholder="Town / City"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" name="State" value="" placeholder="State" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>

                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input name="email" type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                            required="" placeholder="Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="ship_different_input">
                                        <textarea placeholder="Notes About your Order"
                                            name="form_order_notes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
