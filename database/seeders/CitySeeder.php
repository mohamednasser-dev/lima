<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name_ar' => 'مصر',
                'name_en' => 'Egypt',
                'code' => '+20',
                'active' => 1,

            ],
            [
                'name_ar' => 'السعودية',
                'name_en' => 'saudi arabia',
                'code' => '+966',
                'active' => 0,
            ],
        ];
        foreach ($data as $get) {
            City::updateOrCreate($get);
        }
    }
}
