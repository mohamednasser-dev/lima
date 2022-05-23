<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\General\MultiDelete;
use App\Http\Requests\CategoryRequest;
use App\DataTables\CategoryDataTable;
use App\Models\Category;

//use File;

class CategoryController extends GeneralController
{
    protected $viewPath = 'dashboard.category';
    protected $path = 'categories';
    private $route = 'categories';
    protected $paginate = 30;

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function index(CategoryDataTable $dataTable)
    {
        $parent_id = null;
        return $dataTable->with('parent_id', $parent_id)->render($this->viewPath . '.index');
    }

    public function show(CategoryDataTable $dataTable, $parent_id)
    {
        return $dataTable->with('parent_id', $parent_id)->render($this->viewPath . '.index');
    }

    public function create($parent_id)
    {
        return view($this->viewPath . '.create', compact('parent_id'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $this->model::create($data);
        return redirect()->route($this->route . '.show', ['parent_id' => $request->parent_id])->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view($this->viewPath . '.edit', compact('data'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/categories/'), $img_name);
                $data['image'] = $img_name;
            }
        }
        $this->model::where('id', $id)->update($data);
        $row = $this->model::findOrFail($id);
        return redirect()->route($this->route . '.show', ['parent_id' => $row->parent_id])->with('success', 'تم التعديل بنجاح');

    }

    public function delete($id)
    {
        try {
            $data = $this->model::findOrFail($id);
            //File::delete($data->image);
            $data->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('danger', 'لا يمكن الحذف لوجود فيديوهات بالقسم المختار');
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
}
