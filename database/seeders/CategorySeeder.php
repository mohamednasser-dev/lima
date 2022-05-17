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
                'image' => 'children.png',
                'id' => 1 ,
            ],
            [
                'name_ar' => 'الامهات',
                'name_en' => 'mothers',
                'image' => 'mothers.png',
                'id' => 2 ,
            ],
        ];
        foreach ($data as $row) {
            Category::updateOrCreate($row);
        }

        $children_sub_categories = [
            [
                'name_ar' => 'حلقات كرتون',
                'name_en' => 'Cartons episodes',
                'image' => 'episodes.png',
                'parent_id' =>1,
            ],
            [
                'name_ar' => 'حكايات',
                'name_en' => 'Tales',
                'image' => 'tales.png',
                'parent_id' =>1,
            ],
            [
                'name_ar' => 'قصص',
                'name_en' => 'Stories',
                'image' => 'stories.png',
                'parent_id' =>1,
            ],
            [
                'name_ar' => 'مقالات',
                'name_en' => 'Articles',
                'image' => 'articles.png',
                'parent_id' =>1,
            ],

//            [
//                'name_ar' => 'تبسيط علوم',
//                'name_en' => 'simplify science',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'تجارب علمية',
//                'name_en' => 'Scientific experiments',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'مناسبات',
//                'name_en' => 'events',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'شخصيات مؤثرة',
//                'name_en' => 'Influential characters',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'تغذية',
//                'name_en' => 'feed',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'معلومات عامة',
//                'name_en' => 'general information',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'قصص علمية مكتوبة',
//                'name_en' => 'Written scientific stories',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
//            [
//                'name_ar' => 'حكايات قبل النوم',
//                'name_en' => 'bedtime stories',
//                'image' => 'children.png',
//                'parent_id' =>1,
//            ],
        ];
        foreach ($children_sub_categories as $row) {
            Category::updateOrCreate($row);
        }


        $mothers_sub_categories = [
            [
                'name_ar' => 'فيديوهات',
                'name_en' => 'videos',
                'image' => 'videos.png',
                'parent_id' =>2,
            ],
            [
                'name_ar' => 'مقالات',
                'name_en' => 'Articles',
                'image' => 'mother_articles.png',
                'parent_id' =>2,
            ],
        ];
        foreach ($mothers_sub_categories as $row) {
            Category::updateOrCreate($row);
        }
    }
}
