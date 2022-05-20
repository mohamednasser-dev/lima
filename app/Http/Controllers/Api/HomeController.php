<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\CategoryResources;
use App\Models\Category;
use App\Models\Slider;

class HomeController extends GeneralController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    public function home($id)
    {
        //sliders
        $cats = $this->model::where('parent_id',$id)->get();
        $data = (CategoryResources::collection($cats));
        return $this->sendResponse($data,__('lang.data_show_successfully'),200);
    }
}
