<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CityDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\CityRequest;
use App\Http\Requests\General\MultiDelete;
use App\Models\City;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class CityController extends GeneralController
{
    protected $viewPath = 'roles';
    protected $path = 'roles';
    private $route = 'cities';
    protected $paginate = 30;

    public function __construct(City $model)
    {
        parent::__construct($model);
    }

    public function index(CityDataTable $dataTable)
    {
        return $dataTable->render('dashboard.city.index');
    }

    public function create()
    {
        return view('dashboard.city.create');
    }

    public function store(CityRequest $request)
    {

        $data = $request->validated();
        $city = $this->model::create($data);
        return redirect()->route($this->route)->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view('dashboard.city.edit', compact('data'));
    }

    public function update(CityRequest $request, $id)
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
