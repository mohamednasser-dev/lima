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
                'name_ar' => 'الرياض',
                'name_en' => 'Riyadh',
            ],
            [
                'name_ar' => 'جده',
                'name_en' => 'Jeddah',
            ],
            [
                'name_ar' => 'جده',
                'name_en' => 'Jeddah',
            ],
            [
                'name_ar' => 'مكة المكرمة',
                'name_en' => 'Mecca',
            ],
        ];
        foreach ($data as $get) {
            City::updateOrCreate($get);
        }
    }
}
