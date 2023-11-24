<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{

    public function run()
    {
        DB::table('media')->insert([
            [
                'media' => 'assets\images\project\p1-2.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
            [
                'media' => 'assets\images\project\p1-3.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
            [
                'media' => 'assets\images\project\p1-4.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
            [
                'media' => 'assets\images\project\p1-5.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
            [
                'media' => 'assets\images\project\p1-6.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
            [
                'media' => 'assets\images\project\p1-7.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
            [
                'media' => 'assets\images\project\p1-8.jpg',
                'media_type' => 'image',
                'project_id' => '15',
                'status' => 'on'
            ],
        ]);
    }
}
