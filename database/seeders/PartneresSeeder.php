<?php



namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PartneresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'logo' => 'http://127.0.0.1:8000/assets/images/partners/giz.jpg',
                'name' => 'giz',
                'link' => 'https://www.giz.de/en/html/index.html',
                'status' => 'on',
            ],
            [
                'logo' => 'http://127.0.0.1:8000/assets/images/partners/bdc.png',
                'name' => 'bds',
                'link' => 'https://www.example-bds.com',
                'status' => 'on',
            ],
            [
                'logo' => 'http://127.0.0.1:8000/assets/images/partners/usaid.png',
                'name' => 'usaid',
                'link' => 'https://www.example-usaid.gov',
                'status' => 'on',
      
            ],
        ]);
    }
}