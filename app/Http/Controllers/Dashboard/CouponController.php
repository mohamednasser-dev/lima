<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\General\MultiDelete;
use App\Http\Requests\CouponRequest;
use App\DataTables\CouponDataTable;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends GeneralController
{
    protected $viewPath = 'coupons';
    protected $path = 'coupons';
    private $route = 'coupons';
    protected $paginate = 30;

    public function __construct(Coupon $model)
    {
        parent::__construct($model);
    }

    public function index(CouponDataTable $dataTable)
    {
        return $dataTable->render('dashboard.'.$this->path.'.index');
    }

    public function create()
    {
        return view('dashboard.'.$this->path.'.create');
    }

    public function store(CouponRequest $request)
    {

        $data = $request->validated();
        $city = $this->model::create($data);
        return redirect()->route($this->route)->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view('dashboard.'.$this->path.'.edit', compact('data'));
    }

    public function update(CouponRequest $request, $id)
    {

        $data = $request->validated();
        $this->model::where('id', $id)->update($data);;
        return redirect()->route($this->route)->with('success', 'تم التعديل بنجاح');

    }

    public function delete(Request $request, $id)
    {
        try {
            $data = $this->model::findOrFail($id);
            $data->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {
            return redirect()->route($this->route)->with('danger', 'لا يمكنك الحذف لاستخدام الدولة عن طريق العملاء');
        }

    }

    public function deletes(MultiDelete $request)
    {
        try {
            // Get Inputs Data From Request
            $data = $request->validated();
            // Get Items Selected
            $items = $this->model->whereIn('id', $data['data'])->get();
            // Check If Not Have Count Items Or Check If User Delete Yourself
            if (!$items->count()) {
                return redirect()->back()->with('danger', 'يجب اختيار عنصر علي الافل');
            }
            //check brand used city
            foreach ($items as $row) {
                $this->model->where('id', $row->id)->delete();
            }
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'لا يمكنك الحذف');
        }
    }


    public function change_active(Request $request)
    {
        $data['active'] = $request->status;
        $this->model::findOrFail($request->id)->update($data);
        return 1;
    }
}
