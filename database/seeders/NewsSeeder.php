<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'id' => 1,
                'preview_image' => 'http://127.0.0.1:8000/assets/images/News/media_655fc074dab17.jpg',
                'title' => 'استقبل رئيس بلدية الرمثا الكبرى  وفدا من من بلدية اوغسبورغ',
                'description' => 'استقبل رئيس بلدية الرمثا الكبرى سعادة أحمد الخزاعلة  وفدا من من بلدية اوغسبورغ في المانيا ومنظمة GIZ التعاون الدولي الألماني  لبحث سبل التعاون المشترك وتبادل الخبرات  مع بلدية الرمثا ووضع خطة عمل لمدة خمسة سنوات .',
                'date' => '2023-10-09',
                'status' => 'on',

            ]
        ]);
        DB::table('news')->insert([
            [
                'id' => 2,
                'preview_image' => 'http://127.0.0.1:8000/assets/images/News/media_655fbe403efd4.jpg',
                'title' => 'الإنتهاء من أعمال تصميم دوار القبة',
                'description' => 'تابع رئيس بلدية الرمثا سعادة أحمد الخزاعلة منذ  صباح اليوم جهود الكوادر لإنهاء أعمال ( دوار القبة ) دوار الوكالة سابقا . نشكر سعادة أحمد الخزاعلة على الفكرة الرائعة  وكوادر البلدية على جهودهم في إنجاز العمل بشكل جميل  .',
                'date' => '2023-11-13',
                'status' => 'on',
                'created_at'=>Carbon::now(),
            ]
        ]);
        DB::table('news')->insert([
            [
                'id' => 3,
                'preview_image' => 'http://127.0.0.1:8000/assets/images/News/media_655fbf03db2b3.jpg',
                'title' => 'ترأس رئيس بلدية الرمثا في المؤتمر المنعقد في إيطاليا',
                'description' => 'خلال ترأس سعادة أحمد الخزاعلة رئيس بلدية الرمثا في المؤتمر المنعقد في إيطاليا لمناقشة مواضيع النقل والتنمية و التطوير الحضري.',
                'date' => '2023-10-24',
                'status' => 'on',

            ]
        ]);

        DB::table('news')->insert([
            [
                'id' => 4,
                'preview_image' => 'http://127.0.0.1:8000/assets/images/News/media_655fbf6fb1804.jpg',
                'title' => 'رئيس بلدية الرمثا الكبرى يلتقي بسعادة السفير الهولندي',
                'description' => 'رئيس بلدية الرمثا الكبرى سعادة أحمد الخزاعلة يلتقي بسعادة السفير الهولندي السيد هاري فيراري في السفارة الهولندية لدى المملكة الأردنية الهاشمية لبحث سبل التعاون مع بلدية الرمثا الكبرى.',
                'date' => '2023-10-16',
                'status' => 'on',
                'created_at'=>Carbon::now(),
            ]
        ]);

    }
}
