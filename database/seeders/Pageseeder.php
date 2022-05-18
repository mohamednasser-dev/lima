<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class Pageseeder extends Seeder
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
                'title_ar' => 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال او نماذج مواقع انترنتلوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه',
                'title_en' => 'Lorem Ipsum is a virtual model that is placed in the designs to be presented to the client to visualize the way to put texts in the designs, whether they are printed designs ... a brochure or flyer, for example, or models for websites',
                'type' => 'about',
                'image' => 'about.png',
            ],
            [
                'title_ar' => 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال او نماذج مواقع انترنتلوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه',
                'title_en' => 'Lorem Ipsum is a virtual model that is placed in the designs to be presented to the client to visualize the way to put texts in the designs, whether they are printed designs ... a brochure or flyer, for example, or models for websites',
                'type' => 'terms',
                'image' => 'terms.png',
            ],
            [
                'title_ar' => 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال او نماذج مواقع انترنتلوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه',
                'title_en' => 'Lorem Ipsum is a virtual model that is placed in the designs to be presented to the client to visualize the way to put texts in the designs, whether they are printed designs ... a brochure or flyer, for example, or models for websites',
                'type' => 'privacy',
                'image' => 'privacy.png',
            ],
            [
                'title_ar' => 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال او نماذج مواقع انترنتلوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه',
                'title_en' => 'Lorem Ipsum is a virtual model that is placed in the designs to be presented to the client to visualize the way to put texts in the designs, whether they are printed designs ... a brochure or flyer, for example, or models for websites',
                'type' => 'idea',
                'image' => 'idea.png',
            ],
        ];
        foreach ($data as $get) {
            Page::updateOrCreate($get);
        }
    }
}
