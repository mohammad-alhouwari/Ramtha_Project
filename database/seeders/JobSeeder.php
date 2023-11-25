<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job; // Assuming your Job model is in the 'App\Models' namespace

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a job with status 1
        Job::create([
            'image' => 'assets\images\job-offer.jpg', // Replace with your image path
            'title' => 'اعلان توظيف', // Replace with your job title
            'status' => 'on',
        ]);

        // You can create more jobs with different details if needed
    }
}

