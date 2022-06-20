<?php

namespace Database\Seeders;

use App\Models\SubscribeType;
use Illuminate\Database\Seeder;

class SubscriptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mobile screens
        $data = [
            [
                'id' => 1,
                'name_ar' => 'سنوي',
                'name_en' => 'annual',
                'month_count' => 12,
                'cost' => 500,
            ],
            [
                'id' => 2,
                'name_ar' => 'نصف سنوي',
                'name_en' => 'midterm',
                'month_count' => 6,
                'cost' => 1200,
            ],
        ];
        foreach ($data as $get) {
            SubscribeType::updateOrCreate($get);
        }
    }
}
