<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\CityResources;
use App\Http\Resources\PageResources;
use App\Models\City;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use function auth;


class HelperController extends GeneralController
{
    public function __construct(City $model)
    {
        parent::__construct($model);
    }

    public function cities(Request $request)
    {
        $data = City::active()->get();
        $data = (CityResources::collection($data));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }


    public function pages(Request $request, $type)
    {
        $data = Page::where('type', $type)->first();
        $data = (new PageResources($data));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

}
