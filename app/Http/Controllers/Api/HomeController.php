<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\BrandsResources;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Slider;
use App\Http\Resources\SliderResources;

class HomeController extends GeneralController
{
    public function __construct(Cart $model)
    {
        parent::__construct($model);
    }
    public function home()
    {
        //sliders
        $sliders = Slider::get();
        $data['slider'] = (SliderResources::collection($sliders));
        //brands
//        $brands = BrandProduct::where('discount', '>', 0)->get();
        $brands = Brand::get();
        $data['brands'] = (BrandsResources::collection($brands));
        return $this->sendResponse($data,__('lang.data_show_successfully'),200);
    }
}
