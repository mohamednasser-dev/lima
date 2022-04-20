<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\OrderShippingDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Resources\Dashboard\ShippingOrderResource;
use App\Models\OrderShipping;

class OrderShippingController extends GeneralController
{
    protected $viewPath = 'shipping';
    protected $path = 'shippings';
    private $route = 'shippings';
    protected $paginate = 30;

    public function __construct(OrderShipping $model)
    {
        parent::__construct($model);
    }

    public function index(OrderShippingDataTable  $dataTable)
    {
        return $dataTable->render('dashboard.' . $this->viewPath . '.index');
    }
        
    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        abort_unless(request()->ajax(), 404);
        $shipping = $this->model->with('order', 'order.address')->find($id);
        return $this->sendResponse(new ShippingOrderResource($shipping), __('lang.shipments'));
    }

    /**
     * approve
     * Mark shipment as delivered
     * @param  mixed $id
     * @return void
     */
    public function approve($id)
    {
        abort_unless(request()->ajax(), 404);
        
        $shipping = $this->model->findOrFail($id);
        
        if($shipping->isPending())
            $shipping->update(['status' => OrderShipping::DELIVERED]);

        return $this->sendResponse(null, __('lang.saved'));
    }
}
