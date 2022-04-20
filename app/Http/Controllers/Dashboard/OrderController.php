<?php

namespace App\Http\Controllers\Dashboard;
use App\DataTables\OrderDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\General\MultiDelete;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends GeneralController
{
    protected $viewPath = 'order';
    protected $path = 'orders';
    private $route = 'orders';
    protected $paginate = 30;

    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function index(OrderDataTable  $dataTable)
    {
        return $dataTable->render('dashboard.' . $this->viewPath . '.index');
    }

    public function create()
    {
        return view('dashboard.' . $this->viewPath . '.create');
    }


    public function show(Order $order)
    {
        $data = $order->load('user:id,name', 'shipments', 'items', 'items.product', 'address');

        return view('dashboard.' . $this->viewPath . '.show', compact('data'));
    }


    public function delete($id)
    {
        $data = $this->model::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function deletes(MultiDelete $request)
    {
        try {
            // Get Inputs Data From Request
            $data = $request->validated();
            // Get Items Selected
            $items = $this->model->whereIn('id', $data['data']);
            // Check If Not Have Count Items Or Check If User Delete Yourself
            if (!$items->count()) {
                return redirect()->back()->with('danger', 'يجب اختيار عنصر علي الافل');

            }
            // Get & Delete Data Selected
            $items->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {

            return redirect()->back()->with('danger', 'لا يمكنك الحذف');
        }
    }

    public function change_status(Request $request)
    {
        $data['active'] = $request->status;
        $this->model::whereId($request->id)->update($data);
        return 1;
    }

}
