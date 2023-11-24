<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title' => ' تجهيز الأرصفة بمحيط مخبز أبو شاكر',
                'description' => 'إستمرار جهود كوادر قسم المشاريع في تجهيز الأرصفة بمحيط مخبز أبو شاكر وتوسعة الطريق لتسهيل حركة المرور في المنطقة ',
                'preview_image' => 'assets\images\project\p1.jpg',
                'percentage' => '85',
                'status' => 'on'
            ],
            [
                'title' => ' إنارة طريق جابر الدولي ',
                'description' => 'التقى رئيس بلدية الرمثا الكبرى سعادة أحمد الخزاعلة صباح اليوم بمعالي المهندس ماهر ابو السمن وزير الاشغال العامه 
                                    وتم الاتفاق على انارة طريق جابر الدولي وبالتشارك ما بين بلدية الرمثا ووزارة الاشغال .
                                    شاكرين ومقدرين جهود معالي أبو السمن على حسن التعاون مع رئيس بلدية الرمثا من أجل تطوير مدينة الرمثا.',
                'preview_image' => 'assets\images\project\p2.jpg',
                'percentage' => '80',
                'status' => 'on'
            ],
            [
                'title' => 'توسعة الطرق في محيط زاوية مخبز أبو شاكر',
                'description' => 'جهود كوادر قسم المشاريع  في العمل على توسعة الطرق في محيط زاوية مخبز أبو شاكر . 
نشكر م محمد الحوراني و المشرف أشرف أبو الرز على التفاني بالعمل .',
                'preview_image' => 'assets\images\project\p3.jpg',
                'percentage' => '87',
                'status' => 'on'
            ],
        ]);
    }
}
