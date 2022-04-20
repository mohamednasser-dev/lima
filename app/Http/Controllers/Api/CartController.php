<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\Api\CartRemoveRequest;
use App\Http\Requests\Api\CartRequest;
use App\Http\Requests\Api\CartUpdateRequest;
use App\Http\Requests\Api\Orders\SubmitOrderRequest;
use App\Http\Resources\CartResources;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends GeneralController
{

    public function __construct(Cart $model)
    {
        parent::__construct($model);
    }

    public function cart(CartRequest $request, $type)
    {
        $data = $request->validated();
        $id = auth('api')->user()->id;
        $cart = $this->model::where('product_id', $data['product_id'])->first();
        if ($cart && $type == 'add') {
            $cart->update(['quantity' => $cart->quantity + 1]);
            $message = __('lang.data_added_successfully');
        } elseif ($cart == null && $type == 'add') {
            $data['quantity'] = 1;
            $data['user_id'] = $id;
            $this->model::create($data);
            $message = __('lang.data_added_successfully');
        } elseif ($cart->quantity > 1 && $type == 'remove') {
            $cart->update(['quantity' => $cart->quantity - 1]);
            $message = __('lang.data_deleted_successfully');
        } elseif ($cart->quantity == 1 && $type == 'remove') {
            $cart->delete();
            $message = __('lang.data_deleted_successfully');
        }
        return $this->sendResponse((object)[], $message, 200);
    }

    public function myCart(Request $request)
    {
        $id = auth('api')->user()->id;
        $my_cart = $this->model::where('user_id', $id)->with('Product')->get();
        $data = (CartResources::collection($my_cart));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function checkout(Request $request)
    {
        $id = auth('api')->user()->id;
        $cart = $this->model::where('user_id', $id)->with('Product')->get();
        if(count($cart) == 0){
            return $this->errorResponse( __('lang.cart_empty'), null , 400);
        }
        $total = 0;
        foreach ($cart as $row) {
            $total = $total + $row->quantity * $row->product->price;
        }
        $data['sub_total'] = $total;
        $data['delivery'] = settings('cash_on_delivery');
        $data['tax'] = intval(.14 * $data['sub_total']);
        $data['total'] = $data['sub_total'] + $data['delivery'] + $data['tax'];
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function updateQuantity(CartUpdateRequest $request)
    {
        $data = $request->validated();
        $cart = $this->model::where('product_id', $request->product_id)->first();
        if ($request->quantity == '0') {
            $cart->delete();
            return $this->sendResponse($data, __('lang.data_deleted_successfully'), 200);
        }
        if ($cart) {
            $cart->update(['quantity' => $request->quantity]);
            return $this->sendResponse((object)[], __('lang.data_updated_successfully'), 200);
        }
    }

    public function count(Request $request)
    {
        $id = auth('api')->user()->id;
        $data = $this->model::where('user_id', $id)->count();
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function remove(CartRemoveRequest $request)
    {
        $request->validated();
        $data = $this->model::findOrFail($request->cart_id);
        $data->delete();
        return $this->sendResponse((object)[], __('lang.data_deleted_successfully'), 200);
    }


    /**
     * submitOrder
     *
     * @param  mixed $request
     * @return void
     */
    public function submitOrder(SubmitOrderRequest $request)
    {
        // Get user cart
        $cart = apiUser()->cart;
        $data = $request->validated();

        if($cart->isEmpty())
            return sendResponse(false, __('lang.empty_cart'));

        // Prepare order Items
        $orderItems    = $this->prepareOrderDetails($cart);
        $data['price']            = array_sum(data_get($orderItems, '*.total'));
        $data['total_days_price'] = $data['price'] * (isset($data['shipping_count']) ? $data['shipping_count'] : 1);
        $data['delivery_price']   = settings('delivery_cost');
        $data['total']            = $data['total_days_price'] + $data['delivery_price']; // For now;
        // Create order
        DB::beginTransaction();
        $order = Order::create($data);
        // Save order items
        $order->items()->saveMany($orderItems);
        // Update each product quantity and reserved_quantity
        $order->updateItemsQuantities();
        // Then empty user cart
        apiUser()->cart()->delete();
        DB::commit();
        return $this->sendResponse(['id' => $order->id], __('lang.saved'));
    }

    /**
     * prepareOrderDetails
     *
     * @param  mixed $cart
     * @return array
     */
    private function prepareOrderDetails($cart): array{
        $items = [];
        foreach($cart as $item){
            $items[] = new OrderDetail([
                'product_id' => $item->product_id,
                'product_name_ar' => $item->Product->title_ar,
                'product_name_en' => $item->Product->title_en,
                'price' => $item->Product->price_offer,
                'quantity' => $item->quantity,
                'total' => $item->Product->price_offer * $item->quantity,
            ]);
        }
        return $items;
    }
}
