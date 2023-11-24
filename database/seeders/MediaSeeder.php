<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    public function run()
    {
        DB::table('media')->insert(
            [
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
                'media' => 'http://127.0.0.1:8000/images/media_655fc32747164.jpg',
                'media_type' => 'image',
                'news_id' => 1,


            ]
        );
        DB::table('media')->insert([
            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc327475e1.jpg',
                'media_type' => 'image',
                'news_id' => 1,


            ],
            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc3274798c.jpg',
                'media_type' => 'image',
                'news_id' => 1,


            ],
            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc32747f6c.jpg',
                'media_type' => 'image',
                'news_id' => 1,

            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc32748525.jpg',
                'media_type' => 'image',
                'news_id' => 1,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc32748a84.jpg',
                'media_type' => 'image',
                'news_id' => 1,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed04655.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed04a15.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed04fd2.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed0522f.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed48a1e.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed4a8be.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc4ed4af75.jpg',
                'media_type' => 'image',
                'news_id' => 2,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc50955fcf.jpg',
                'media_type' => 'image',
                'news_id' => 3,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fcdf5e39ae.jpg',
                'media_type' => 'image',
                'news_id' => 3,


            ],

            [
                'media' => 'http://127.0.0.1:8000/assets/images/News/media_655fc5095697b.jpg',
                'media_type' => 'image',
                'news_id' => 3,


            ],
        ]);
    }
}
