<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'محمد خير قويدر الزعبي',
                'image' => 'assets\images\members\m1.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'مراد الحمد الزعبي',
                'image' => 'assets\images\members\m2.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'عوض ذيابات',
                'image' => 'assets\images\members\m3.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'اميره الغانم',
                'image' => 'assets\images\members\m4.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'منى جمهور',
                'image' => 'assets\images\members\m5.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'امل خويله',
                'image' => 'assets\images\members\m6.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'عمر الزعبي  (ابو حفص)',
                'image' => 'assets\images\members\m7.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
            [
                'name' => 'يوسف جراروة',
                'image' => 'assets\images\members\m8.jpg',
                'position' => 'عضو مجلس بلدي',
                'status' => 'on',
            ],
        ]);
    }
}
