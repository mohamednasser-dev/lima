<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'site_name_ar' => 'ليما',
            'site_name_en' => 'lima',
            'phone' => '8484858845855',
            'email' => 'info@lima.com',
            'logo' => 'uploads/setting/web_logo.png',
            'login_pg' => 'uploads/setting/login_pg.png',
            'logo_login' => 'uploads/setting/login_page_logo.png',
            'location' => null,
            'facebook' => 'https://www.facebook.com',
            'google' => 'https://www.facebook.com',
            'twitter' => null,
            'instagram' => null,
            'pinterest' => null,
            'snapchat' => null,
            'telegram' => null,
            'youtube' => null,
            'address_ar' => 'المنوفية',
            'address_en' => 'al mnofia',
            'terms_ar' => 'terms_ar',
            'terms_en' => 'terms_en',
            'privacy_ar' => 'privacy_ar',
            'privacy_en' => 'privacy_en',
            'usage_ar' => 'usage_ar',
            'usage_en' => 'usage_en',
            'about_ar' => 'about_ar',
            'about_en' => 'about_en',
            'yearly_cost' => '200',
            'half_year_cost' => '100',
            'app_gif' => null,
        ];


        Setting::setMany($data);
    }
}
