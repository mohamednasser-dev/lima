<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\OffersResources;
use App\Http\Resources\ProductDetailsResources;
use App\Models\BrandProduct;
use Illuminate\Http\Request;


class ProductController extends GeneralController
{
    public function __construct(BrandProduct $model)
    {
        parent::__construct($model);
    }

    public function products(Request $request, $id)
    {
        $products = $this->model::where('brand_id', $id)->get();
        $products_data = (OffersResources::collection($products));
        return $this->sendResponse($products_data, __('lang.data_show_successfully'), 200);
    }

    public function product_details(Request $request, $id)
    {
        $product = $this->model::with('Details')->find($id);
        if($product){
            $data = (new ProductDetailsResources($product));
            return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
        }else{
            return $this->errorResponse( __('lang.should_send_valid_id'), null , 400);
        }
    }
}
