<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\CategoryResources;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function home(Request $request, $id)
    {
        if ($request->header('platform') == 'android') {
            $version = Setting::where('key', 'android_version')->first()->val;
            if ($request->header('version') < $version) {
                return response()->json(msg($request, failed(), __('lang.should_update_app_first')));
            }
        }

        $cats = Category::where('parent_id', $id)->get();
        if (!apiUser()) {
            $data['subscriber'] = 0;
        } else {
            $data['subscriber'] = (integer)apiUser()->subscriber;
        }
        $data['categories'] = (CategoryResources::collection($cats));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);

    }


}
