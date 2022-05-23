<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
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
                'link' => 'https://ar-ar.facebook.com/',
                'image' => 'facebook.png',
            ],
            [
                'link' => 'https://api.whatsapp.com/01201636129',
                'image' => 'whats_app.png',
            ],
            [
                'link' => 'https://www.youtube.com/',
                'image' => 'youtube.png',
            ],

        ];
        foreach ($data as $get) {
            SocialLink::updateOrCreate($get);
        }
    }
}
