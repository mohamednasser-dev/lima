<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\General\MultiDelete;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends GeneralController
{
    protected $viewPath = 'slider';
    protected $path = 'slider';
    private $route = 'sliders';
    private $image_path = 'sliders';
    protected $paginate = 30;

    public function __construct(Slider $model)
    {
        parent::__construct($model);
    }

    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render('dashboard.' . $this->viewPath . '.index');
    }

    public function create()
    {
        return view('dashboard.' . $this->viewPath . '.create');
    }

    public function store(SliderRequest $request)
    {
        $data = $request->validated();
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/sliders/'), $img_name);
                $data['image'] = $img_name;
            }
        }
        $this->model::create($data);
        return redirect()->route($this->route)->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view('dashboard.' . $this->viewPath . '.edit', compact('data'));
    }

    public function update(SliderRequest $request, $id)
    {
        $data = $request->validated();
        $item = $this->model->findOrFail($id);
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/sliders/'), $img_name);
                $data['image'] = $img_name;
            }
        }
        $this->model::where('id', $id)->update($data);
        return redirect()->route($this->route)->with('success', 'تم التعديل بنجاح');
    }

    public function delete(Request $request, $id)
    {
        $data = $this->model::findOrFail($id);
        $this->deleteImage($data->image);
        $data->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
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
            // Get & Delete Data Selected
            foreach ($items as $row) {
                $slider = $this->model->findOrFail($row->id);
                $this->deleteImage($slider->image);
                $slider->delete();
            }
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'لا يمكنك الحذف');
        }
    }
}
