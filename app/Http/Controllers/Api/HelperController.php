<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\ScreenResources;
use App\Http\Resources\CityResources;
use App\Http\Resources\PageResources;
use App\Http\Resources\TeamResources;
use Illuminate\Http\Request;
use App\Models\SocialLink;
use App\Models\Setting;
use App\Models\Screen;
use App\Models\City;
use App\Models\Page;
use App\Models\Team;
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

    public function screens(Request $request)
    {
        $screens = Screen::orderBy('id', 'asc')->get();
        $screens = (ScreenResources::collection($screens));
        return response()->json(msgdata($request, success(), __('lang.data_show_successfully'), $screens));
    }

    public function teams(Request $request)
    {
        $data = Team::orderBy('id', 'asc')->get();
        $data = (TeamResources::collection($data));
        return response()->json(msgdata($request, success(), __('lang.data_show_successfully'), $data));
    }


    public function settings(Request $request)
    {
        $data = Setting::get();
        return response()->json(msgdata($request, success(), __('lang.data_show_successfully'), $data));
    }

    public function links(Request $request, $key)
    {
        $data = Setting::where('key', $key)->first();
        $result['result'] = "";
        if ($data) {
            $result['result'] = $data->val;
        }
        return response()->json(msgdata($request, success(), __('lang.data_show_successfully'), $result));
    }

    public function all_links(Request $request)
    {
        $data = SocialLink::get();
        return response()->json(msgdata($request, success(), __('lang.data_show_successfully'), $data));
    }

}
