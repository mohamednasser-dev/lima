<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\Api\AddressDeleteRequest;
use App\Http\Requests\Api\AddressRequest;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends GeneralController
{


    public function __construct(Address $model)
    {
        parent::__construct($model);
    }

    public function index(Request $request)
    {
        $id = auth('api')->user()->id;
        $data = $this->model::where('user_id', $id)->get();
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function store(AddressRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth('api')->user()->id;
        $new_address = $this->model::create($data);
        return $this->sendResponse($new_address, __('lang.data_created_successfully'), 200);
    }

    public function edit(AddressRequest $request)
    {
        $data = $request->validated();
        $address = $this->model::findorfail($data['address_id']);
        unset($data['address_id']);
        $address->update($data);
        return $this->sendResponse($address, __('lang.data_updated_successfully'), 200);
    }

    public function delete(AddressDeleteRequest $request)
    {
        $data = $request->validated();
        $exists_address = Order::where('address_id', $request->address_id)->first();
        if ($exists_address) {
            return $this->errorResponse(__('lang.cant_delete_address'), null, 400);
        } else {
            $address = $this->model::findorfail($request->address_id);
            $address->delete();
            return $this->sendResponse((object)[], __('lang.data_deleted_successfully'), 200);
        }
    }
}
