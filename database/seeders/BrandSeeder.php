<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\City;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$city = City::first();
        $data = [
            [
                'title_ar' => 'نيسلا',
                'title_en' => 'nestle',
                'body_ar' => 'منذ انطلاقها، تسعى بيرين لريادة قطاع مياه الشرب المعبأة بالمملكة العربية السعودية على أكمل وجه باستخدام أحدث التقنيات العالمية واعتماد نفس المعايير المستخدمة في أرقى مصانع مياه الشرب المعبأة في العالم ومن ثم تقدمها للمستهلك المحلي في شكل منتج مثالي معتمدةً على تسخير التقنيات الحديثة من الذكاء الاصطناعي وتعلم الآلة',
                'body_en' => 'Since its launch, Berain has been seeking to lead the bottled drinking water sector in the Kingdom of Saudi Arabia to the fullest by using the latest international technologies and adopting the same standards used in the finest bottled drinking water factories in the world and then providing it to the local consumer in the form of an ideal product based on harnessing modern technologies from artificial intelligence and learning god',
                'min_order' => 200,
                'image' => 'uploads/brands/nestle.png',
                'cover' => 'uploads/brands/cover.png',
                'lat' => '24.748464971408364',
                'lng' => '39.64293670654296',
                'vision_ar' => 'منذ انطلاقها، تسعى بيرين لريادة قطاع مياه الشرب المعبأة بالمملكة العربية السعودية على أكمل وجه باستخدام أحدث التقنيات العالمية واعتماد نفس المعايير المستخدمة في أرقى مصانع مياه الشرب المعبأة في العالم ومن ثم تقدمها للمستهلك المحلي في شكل منتج مثالي معتمدةً على تسخير التقنيات الحديثة من الذكاء الاصطناعي وتعلم الآلة',
                'vision_en' => 'Since its launch, Berain has been seeking to lead the bottled drinking water sector in the Kingdom of Saudi Arabia to the fullest by using the latest international technologies and adopting the same standards used in the finest bottled drinking water factories in the world and then providing it to the local consumer in the form of an ideal product based on harnessing modern technologies from artificial intelligence and learning god',
                'message_ar' => 'منذ انطلاقها، تسعى بيرين لريادة قطاع مياه الشرب المعبأة بالمملكة العربية السعودية على أكمل وجه باستخدام أحدث التقنيات العالمية واعتماد نفس المعايير المستخدمة في أرقى مصانع مياه الشرب المعبأة في العالم ومن ثم تقدمها للمستهلك المحلي في شكل منتج مثالي معتمدةً على تسخير التقنيات الحديثة من الذكاء الاصطناعي وتعلم الآلة',
                'message_en' => 'Since its launch, Berain has been seeking to lead the bottled drinking water sector in the Kingdom of Saudi Arabia to the fullest by using the latest international technologies and adopting the same standards used in the finest bottled drinking water factories in the world and then providing it to the local consumer in the form of an ideal product based on harnessing modern technologies from artificial intelligence and learning god',
                'city_id' => $city->id,
            ],
            [
                'title_ar' => 'دانسانيا',
                'title_en' => 'dasania',
                'body_ar' => 'منذ انطلاقها، تسعى بيرين لريادة قطاع مياه الشرب المعبأة بالمملكة العربية السعودية على أكمل وجه باستخدام أحدث التقنيات العالمية واعتماد نفس المعايير المستخدمة في أرقى مصانع مياه الشرب المعبأة في العالم ومن ثم تقدمها للمستهلك المحلي في شكل منتج مثالي معتمدةً على تسخير التقنيات الحديثة من الذكاء الاصطناعي وتعلم الآلة',
                'body_en' => 'Since its launch, Berain has been seeking to lead the bottled drinking water sector in the Kingdom of Saudi Arabia to the fullest by using the latest international technologies and adopting the same standards used in the finest bottled drinking water factories in the world and then providing it to the local consumer in the form of an ideal product based on harnessing modern technologies from artificial intelligence and learning god',
                'min_order' => 200,
                'image' => 'uploads/brands/dasania.png',
                'cover' => 'uploads/brands/cover.png',
                'lat' => '24.748464971408364',
                'lng' => '39.64293670654296',
                'vision_ar' => 'منذ انطلاقها، تسعى بيرين لريادة قطاع مياه الشرب المعبأة بالمملكة العربية السعودية على أكمل وجه باستخدام أحدث التقنيات العالمية واعتماد نفس المعايير المستخدمة في أرقى مصانع مياه الشرب المعبأة في العالم ومن ثم تقدمها للمستهلك المحلي في شكل منتج مثالي معتمدةً على تسخير التقنيات الحديثة من الذكاء الاصطناعي وتعلم الآلة',
                'vision_en' => 'Since its launch, Berain has been seeking to lead the bottled drinking water sector in the Kingdom of Saudi Arabia to the fullest by using the latest international technologies and adopting the same standards used in the finest bottled drinking water factories in the world and then providing it to the local consumer in the form of an ideal product based on harnessing modern technologies from artificial intelligence and learning god',
                'message_ar' => 'منذ انطلاقها، تسعى بيرين لريادة قطاع مياه الشرب المعبأة بالمملكة العربية السعودية على أكمل وجه باستخدام أحدث التقنيات العالمية واعتماد نفس المعايير المستخدمة في أرقى مصانع مياه الشرب المعبأة في العالم ومن ثم تقدمها للمستهلك المحلي في شكل منتج مثالي معتمدةً على تسخير التقنيات الحديثة من الذكاء الاصطناعي وتعلم الآلة',
                'message_en' => 'Since its launch, Berain has been seeking to lead the bottled drinking water sector in the Kingdom of Saudi Arabia to the fullest by using the latest international technologies and adopting the same standards used in the finest bottled drinking water factories in the world and then providing it to the local consumer in the form of an ideal product based on harnessing modern technologies from artificial intelligence and learning god',
                'city_id' => $city->id,
            ],

        ];
        foreach ($data as $get) {
            Brand::updateOrCreate($get);
        }
    }
}
