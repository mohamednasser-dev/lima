<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\Api\ContactusRequest;
use App\Http\Resources\ScreenResources;
use App\Models\Inbox;
use App\Models\Screen;
use App\Models\Setting;
use Illuminate\Http\Request;
use function auth;


class AppController extends GeneralController
{
    public function __construct(Inbox $model)
    {
        parent::__construct($model);
    }

    public function screens(Request $request)
    {
        $screens = Screen::get();
        $screens = (ScreenResources::collection($screens));
        return $this->sendResponse($screens, __('lang.data_show_successfully'), 200);
    }

    public function pages(Request $request, $key)
    {
        if ($request->header('lang')) {
            $lang = $request->header('lang');
        } else {
            $lang = 'ar';
        }
        $key = $key . '_' . $request->header('lang');
        $data = Setting::where('key', $key)->first()->val;
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function contact_us(ContactusRequest $request)
    {
        $data = $request->validated();
        $user = auth('api')->user();
        if ($user) {
            $data['user_id'] = $user->id;
        }
        $inbox = Inbox::create($data);
        $result['id'] = $inbox->id ;
        $result['message'] = $inbox->message ;
        return $this->sendResponse((object)[], __('lang.data_sent_successfully'), 200);
    }
}
