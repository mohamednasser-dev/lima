<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SubscribeTypeResources;
use App\Http\Controllers\GeneralController;
use App\Models\Invoices;
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
//        if ($request->type == 'visa') {
//            $data['status'] = 'accepted';
//        }
        $created = SubscriptionHistory::create($data);
//        if ($request->type == 'visa') {
//            //update user table if visa because in cash admin should accept order first
//            $user_data['subscriber'] = 1;
//            $user_data['subscription_ended_at'] = $ended_date;
//            User::find(apiUser()->id)->update($user_data);
//        }


        return $this->sendResponse($created, trans('lang.subscription_s'), 200);
    }

    public function payment_step_one(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://app.fawaterk.com/api/v2/getPaymentmethods',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer a006c8d4431af8aeeb67bc1760304a0cb744faea6fcb750b05'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $data = SubscribeType::get();
        $final_result['subscription_types'] = (SubscribeTypeResources::collection($data));
        $final_result['payment_methods'] = json_decode($response);
        return msgdata($request, success(), trans('lang.shown_s'), $final_result);
    }

    public function payment_step_two(Request $request, $payment_method_id, $subscription_id)
    {
        $subscription = SubscriptionHistory::where('id', $subscription_id)->first();
        if ($subscription) {
            //Generate price
            $price = (string)$subscription->cost;
            $Currency = "EGP";
            //end
        } else {
            return msgdata($request, failed(), trans('lang.should_choose_valid_course'), (object)[]);
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://app.fawaterk.com/api/v2/invoiceInitPay',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                        "payment_method_id": ' . $payment_method_id . ',
                        "cartTotal": ' . $price . ',
                        "currency": "' . $Currency . '",
                        "customer": {
                            "first_name": "' . $subscription->User->name . '",
                            "last_name": "' . $subscription->user_id . '",
                            "email": "' . $subscription->User->email . '",
                            "phone": "' . $subscription->User->phone . '",
                            "address": "address"
                        },
                        "cartItems": [
                            {
                                "name": "' . $subscription->name_ar . '",
                                "price": ' . $price . ',
                                "quantity": "1"
                            }

                        ]
                    }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer a006c8d4431af8aeeb67bc1760304a0cb744faea6fcb750b05'
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        //store invoice data to database with course id and user_id ...
        $data['invoice_id'] = $response->data->invoice_id;
        $data['invoice_key'] = $response->data->invoice_key;
        $data['user_id'] = apiUser()->id;
        $data['subscription_history_id'] = $subscription->id;
        $data['payment_id'] = $payment_method_id;
        Invoices::create($data);
        //end store invoice .....
        return msgdata($request, success(), trans('lang.shown_s'), $response);

    }

    public function excute_pay(Request $request)
    {
//        if ($request->type == 'visa') {
//            //update user table if visa because in cash admin should accept order first
//            $user_data['subscriber'] = 1;
//            $user_data['subscription_ended_at'] = $ended_date;
//            User::find(apiUser()->id)->update($user_data);
//        }

        //        if ($request->type == 'visa') {
//            $data['status'] = 'accepted';
//        }

        $invoice = Invoices::where('invoice_id', $request->invoice_id)->first();
        if ($invoice) {
            $invoice->status = 1;
            $invoice->save();
            $user = User::where('id', $invoice->user_id)->first();
            if ($user) {
                if ($user->type != 'student') {
                    return msgdata($request, failed(), trans('lang.permission_warrning'), (object)[]);
                }
            } else {
                return msgdata($request, failed(), trans('lang.should_login'), (object)[]);
            }
            if ($invoice->type == 'course') {
                $id = $invoice->course_id;
                $course = Course::where('id', $id)->where('show', 1)->first();
                if ($course) {
                    $user_course_data['user_id'] = $invoice->user_id;
                    $user_course_data['status'] = 1;
                    $user_course_data['course_id'] = $id;
                    UserCourses::create($user_course_data);
                    foreach ($course->Couse_Lesson as $row) {
                        $exists_lesson = UserLesson::where('user_id', $user->id)->where('lesson_id', $row->id)->first();
                        if (!$exists_lesson) {
                            $user_data['status'] = 1;
                            $user_data['lesson_id'] = $row->id;
                            $user_data['user_id'] = $user->id;
                            UserLesson::create($user_data);
                        } else {
                            $exists_lesson->status = 1;
                            $exists_lesson->save();
                        }
                    }

                    send($user->fcm_token, 'رسالة جديدة', "Successfully subscribed to the course", "course", $course->id);

                    return "course payed successfully";
                } else {
                    return "no course selected";
                }
            } else {
                $id = $invoice->offer_id;
                $offer = Offer::where('id', $id)->where('show', 1)->first();
                if ($offer) {
                    foreach ($offer->Courses as $course) {
                        $couse_Lesson = Lesson::where('course_id', $course->id)->where('show', 1)->get();

                        foreach ($couse_Lesson as $row) {
                            $exists_lesson = UserLesson::where('user_id', $user->id)->where('lesson_id', $row->id)->first();
                            if (!$exists_lesson) {
                                $user_data['status'] = 1;
                                $user_data['lesson_id'] = $row->id;
                                $user_data['user_id'] = $user->id;
                                UserLesson::create($user_data);
                            } else {
                                $exists_lesson->status = 1;
                                $exists_lesson->save();
                            }
                        }
                        $exists_course = UserCourses::where('user_id', $invoice->user_id)->where('course_id', $course->id)->first();
                        if (!$exists_course) {
                            $user_course_data['user_id'] = $invoice->user_id;
                            $user_course_data['course_id'] = $course->id;
                            $user_course_data['status'] = 1;
                            UserCourses::create($user_course_data);
                        }
                    }
                    send($user->fcm_token, 'رسالة جديدة', "Successfully subscribed to the offer", "offer", $offer->id);

                    return "offer payed successfully";
                } else {
                    return "should choose valid offer";
                }
            }
        } else {
            return "no invoice selected";
        }
    }

    public function pay_sucess()
    {
        return redirect()->route('success');
    }

    public function pay_error()
    {
        return redirect()->route('error');
    }


}
