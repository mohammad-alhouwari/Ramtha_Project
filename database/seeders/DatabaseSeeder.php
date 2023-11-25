<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MunicipalityInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
                // \App\Models\User::factory(10)->create();

                // \App\Models\User::factory()->create([
                //     'name' => 'Test User',
                //     'email' => 'test@example.com',
                // ]);
                $this->call(AdminSeeder::class);
                $this->call(ProjectsSeeder::class);
                $this->call(NewsSeeder::class);
                $this->call(LandmarkSeeder::class);
                $this->call(MediaSeeder::class);
                $this->call(InvestmentsTableSeeder::class);
                $this->call(TerndersSeeder::class);
                $this->call(MunicipalityInfoSeeder::class);
        }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
        $this->call(AdminSeeder::class);
        // $this->call(EventsTableSeeder::class);
    }
=======


>>>>>>> 1b803fbd13a892c3a685f015c6e184174fd3f2b9
}
