<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SubscribeTypeResources;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Validator;
use App\Models\SubscriptionHistory;
use App\Models\SubscribeType;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class SubscriptionController extends GeneralController
{
    public function __construct(SubscribeType $model)
    {
        parent::__construct($model);
    }

    public function subscription_types(Request $request)
    {
        $data = SubscribeType::get();
        $data = (SubscribeTypeResources::collection($data));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function store_subscription(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'subscribe_type_id' => 'required|exists:subscribe_types,id',
            'type' => 'required|in:visa,cash'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $subscription = SubscribeType::findOrFail($request->subscribe_type_id);

        $data['name_ar'] = $subscription->name_ar;
        $data['name_en'] = $subscription->name_en;
        $data['cost'] = $subscription->cost;
        $data['user_name'] = apiUser()->name;
        $data['phone'] = apiUser()->phone;
        $data['user_id'] = apiUser()->id;
        $today = Carbon::now();
        $data['started_at'] = $today;
        $ended_date = Carbon::now()->addMonth($subscription->month_count);
        $data['ended_at'] = $ended_date;
        $data['payment_status'] = 1;
        if($request->type == 'visa'){
            $data['status'] = 'accepted';
        }
        SubscriptionHistory::create($data);
        if($request->type == 'visa'){
            //update user table if visa because in cash admin should accept order first
            $user_data['subscriber'] = 1;
            $user_data['subscription_ended_at'] = $ended_date;
            User::find(apiUser()->id)->update($user_data);
        }


        return $this->sendResponse((object)[], trans('lang.subscription_s'), 200);
    }

}
