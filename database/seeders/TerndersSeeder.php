<?php

namespace Database\Seeders;

use App\Models\Tender;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerndersSeeder extends Seeder
{
    public function run()
    {
        // Your seeding logic here
        Tender::create([
            'preview_image'=>'\assets\images\tenders\tender1 .jpeg',
            'preview_image2'=>'\assets\images\tenders\tender1-2.png',            'title'=>'إعلان مناقصة شراء مواد للعمال',
            'value'=>'غير محدد',
            'description'=>' إعلان مناقصة شراء مواد للعمال  وزارة الادارة المحلية الاردنية 
            بلدية_الرمثا_الكبرى',
            'date' => \Carbon\Carbon::createFromFormat('m/d/Y', '11/01/2024'),
            'status'=>'on',

        ]);
        Tender::create([
            'preview_image'=>'\assets\images\tenders\tender2.png',
            // 'preview_image2'=>'\assets\images\tenders\tender1-2.png',
            'title'=>'إعلان طرح عطاء خلطات إسفلتية ',
            'value'=>'غير محدد',
            'description'=>' إعلان طرح عطاء خلطات إسفلتية لشوارع مدينة الرمثا والبويضة ',
            'date' => \Carbon\Carbon::createFromFormat('m/d/Y', '11/26/2023'),
            'status'=>'on',

        ]);
        Tender::create([
            'preview_image'=>'\tender1 .jpeg',
            // 'preview_image2'=>'',
            'title'=>'إعلان مناقصة شراء مواد للعمال',
            'value'=>'غير محدد',
            'description'=>' إعلان مناقصة شراء مواد للعمال  وزارة الادارة المحلية الاردنية 
            بلدية_الرمثا_الكبرى',
            'date' => \Carbon\Carbon::createFromFormat('m/d/Y', '11/01/2024'),
            'status'=>'on',

        ]);
    }
}
