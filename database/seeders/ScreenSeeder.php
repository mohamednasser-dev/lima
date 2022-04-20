<?php

namespace Database\Seeders;

use App\Models\Screen;
use Illuminate\Database\Seeder;

class ScreenSeeder extends Seeder
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
                'title_ar' => 'اطلب اونلاين',
                'title_en' => 'Order online',
                'body_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً',
                'body_en' => 'It is a long established fact that the readable content is on the page he is reading. To give results that give a normal distribution',
                'image' => '1.png',
            ],
            [
                'title_ar' => 'توصيل سريع',
                'title_en' => 'express delivery',
                'body_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً',
                'body_en' => 'It is a long established fact that the readable content is on the page he is reading. To give results that give a normal distribution',
                'image' => '2.png',
            ],
            [
                'title_ar' => 'تتبع مباشر',
                'title_en' => 'Live Tracking',
                'body_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً',
                'body_en' => 'It is a long established fact that the readable content is on the page he is reading. To give results that give a normal distribution',
                'image' => '3.png',
            ],

        ];
        foreach ($data as $get) {
            Screen::updateOrCreate($get);
        }
    }
}
