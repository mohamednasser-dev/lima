<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name_ar' => 'الاطفال',
                'name_en' => 'children',
                'image' => '1.png',
            ],
            [
                'name_ar' => 'الامهات',
                'name_en' => 'mothers',
                'image' => 'mothers.png',
            ],
        ];
        foreach ($data as $get) {
            Category::updateOrCreate($get);
        }
    }
}
