<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;    

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'preview_image' => 'assets/images/Events/clean.JPG',
            'title' => 'حملة النظافة من الايمان',
            'description' => '(مبادرة النظافة من الايمان ) 
            من مبدأ التشاركية والمسؤولية المجتمعية قامت بلدية الرمثا بكوادرها الادارية بيوم عمل تطوعي يخص النظافة من الايمان 
            نرجوا من المجمع المحلي المشاركة في الايام القادمة
            ',
            'capacity' => 25,
            'location' => 'اربد/بلدية الرمثا',
            'date' => '2023-11-07',
            'time' => '13:15:00',
            'status' => 'on',
        ]);
        Event::create([
            'preview_image' => 'assets/images/Events/brmel.PNG',
            'title' => 'حملة تبديل البراميل',
            'description' => '(مبادرة تبديل البراميل ) 
            من مبدأ التشاركية والمسؤولية المجتمعية قامت بلدية الرمثا بكوادرها الادارية بيوم عمل تطوعي يخص تيديل البراميل 
            نرجوا من المجمع المحلي المشاركة في الايام القادمة',
            'capacity' => 24,
            'location' => 'اربد/بلدية الرمثا',
            'date' => '2023-12-09',
            'time' => '14:15:00',
            'status' => 'on',
        ]);
        Event::create([
            'preview_image' => 'assets/images/Events/rasef.PNG',
            'title' => 'حملة توسيع الارصفة',
            'description' => '(مبادرة توسيع الارصفة ) 
            من مبدأ التشاركية والمسؤولية المجتمعية قامت بلدية الرمثا بكوادرها الادارية بيوم عمل تطوعي يخص توسيع الارصفة 
            نرجوا من المجمع المحلي المشاركة في الايام القادمة',
            'capacity' => 20,
            'location' => 'اربد/بلدية الرمثا',
            'date' => '2023-12-09',
            'time' => '15:15:00',
            'status' => 'on',
        ]);
        Event::create([
            'preview_image' => 'assets/images/Events/trees.PNG',
            'title' => 'حملة تقليم الاشجار',
            'description' => '(مبادرة تبديل البراميل ) 
            من مبدأ التشاركية والمسؤولية المجتمعية قامت بلدية الرمثا بكوادرها الادارية بيوم عمل تطوعي يخص تقليم الاشجار 
            نرجوا من المجمع المحلي المشاركة في الايام القادمة',
            'capacity' => 21,
            'location' => 'اربد/بلدية الرمثا',
            'date' => '2023-12-09',
            'time' => '17:15:00',
            'status' => 'on',
        ]);
        Event::create([
            'preview_image' => 'assets/images/Events/mnhal.PNG',
            'title' => 'حملة تنظيف المناهل',
            'description' => '(مبادرة تنظيف المناهل ) 
            من مبدأ التشاركية والمسؤولية المجتمعية قامت بلدية الرمثا بكوادرها الادارية بيوم عمل تطوعي يخص تنظيف المناهل 
            نرجوا من المجمع المحلي المشاركة في الايام القادمة',
            'capacity' => 21,
            'location' => 'اربد/بلدية الرمثا',
            'date' => '2023-12-09',
            'time' => '13:25:00',
            'status' => 'on',
        ]);
       
       
       
       
    }
}
