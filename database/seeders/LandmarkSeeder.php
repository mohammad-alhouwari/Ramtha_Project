<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandmarkSeeder extends Seeder
{

    public function run()
    {
        DB::table('landmarks')->insert([
            [
                'id' => '1',
                'title' => 'المسجد العمري الكبير',
                'description' => 'يعتبر الجامع العمري او مسجد عمر بن الخطاب من أقدم المساجد وأكثرها روعة وجماال في مدينة الرمثا حيث يختزن في ذاكرته معاني ودالالت تاريخية تراثية وأحداثا مرت بها الرمثا عبر سنين طويلة يذكرنا بها مبنى الجامع العريق الذي يفتخربه كل أهل الرمثا.
                                ويقال ان كل مكان مر منه الخليفة الراشد الفاروق عمربن الخطاب في رحلته الى الشام تم 
                                بناء مسجد سمي باسمه والجامع العمري يقال له الجامع الكبير وقد أسس بدايات القرن العشرين 
                                ويقع في وسط الرمثا حيث أنشئت فيما بعد األحياء من حوله وظلت المدينة تتسع حتى أصبحت على ما هي عليه أالن من سعة .
                                ومع ان عدد مساجد مدينة الرمثا زاد عن الـ 50 مسجدا وكل حي من أحياء المدينة أقيم فيه مسجد يقاربه بالسعة إال أن للمسجد العمري مكانته في قلوب أبناء الرمثا خاصة كبار السن منهم فتجد ان صالة الجمعة ال تكون كاملة إال إذا أديت في المسجد العمري .
                                وكان لمئذنة المسجد التي يزيد ارتفاعها عن ال60 ترا مكانة خاصة عند أبناء الرمثا عامة وعند األطفال بشكل خاص حيث كان يقف جميع أطفال المدينة في الشوارع في انتظار أن تضاء باألضواء الملونة إقرارا من المؤذن أن آذان المغرب اقترب كثيرا جدا .',
                'preview_image' => 'assets\images\landmark\m1.jpg',
                'location' => 'الرمثا',
                'status' => 'on'
            ],
            [
                'id' => '2',
                'title' => 'حديقة الملكة رانيا',
                'description' => 'حديقة الملكة رانيا الواقعة على طريق الجمرك القديم مقابل مدينة الحجاج، بمساحة (١٣ دونم) من ضمنها ( ٤ دونم) مركز زها الثقافي المقدم منحة من الديوان الملكي.
وقامت البلدية بالانتهاء من أعمال الاسوار، و باشرت بأعمال الساحات التي تشمل النوافير والممرات ومناطق الألعاب والمناطق الخضراء.
كما تم طرح عطاء في الجريدة الرسمية لصاينة المبنى القديم الموجود وتحويله إلى متحف تراثي لتوثيق تراث مدينة الرمثا.
',
                'preview_image' => 'assets\images\landmark\m2.jpg',
                'location' => 'الرمثا',
                'status' => 'on'
            ],
            [
                'id' => '3',
                'title' => 'صرح الشهيد',
                'description' => 'صرح الشهيد في الرمثا او صرح شهداء الجيش العربي
الاردني في المنطقة الشمالية هو صرح تذكاري يقع
جنوب مدينة الرمثا.',
                'preview_image' => 'assets\images\landmark\m3.jpg',
                'location' => 'الرمثا',
                'status' => 'on'
            ],
            [
                'id' => '4',
                'title' => 'مدينة الحسن الصناعية',
                'description' => 'مدينة الحسن الصناعية في الاردن هي احد المدن الصناعية في الاردن والتي تقع في محافظة اربد.
على بعد 72 كم شمال العاصمة عمان وتبعد 15 كم شرق مدينة اربد, تبلغ المساحة الاجمالية للمدينة
1178 دونما تم انشاؤها عام 1991, تم تنفيذها على ثلاثة مراحل , واستقطبت ما يزيد عن 145 
شركة صناعية..',
                'preview_image' => 'assets\images\landmark\m4.png',
                'location' => 'الرمثا',
                'status' => 'on'
            ],
            [
                'id' => '5',
                'title' => 'مستشفى الملك عبدلله',
                'description' => 'مستشفى الملك عبدالله الجامعي يقع في مدينة الرمثا شمال الاردن.
المستشفى والجامعة يبعدان 20 كم عن مدينة اربد و70 كم عن 
العاصمة عمان, وهذا المستشفى المكون من 15 طابق و683 سرير
يصل ايضا مباشرة بالطريق الدولي الذي يربط الحدود بين 
العاصمتين عمان ودمشق.
مستشفى الملك عبدالله اكبر المستشفيات في شمال الاردن .
ويخدم حوالي مليون مواطن في كل من اربد, وعجلون ,وجرش 
والمفرق.
',
                'preview_image' => 'assets\images\landmark\m5.jpg',
                'location' => 'الرمثا',
                'status' => 'on'
            ],
        ]);
    }
}
