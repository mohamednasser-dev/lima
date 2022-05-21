<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\ScreenRequest;
use App\DataTables\ScreenDataTable;
use App\Models\Screen;

class ScreenController extends GeneralController
{
    protected $viewPath = 'dashboard.screen';
    protected $path = 'screens';
    private $route = 'screens';
    protected $paginate = 30;

    public function __construct(Screen $model)
    {
        parent::__construct($model);
    }

    public function index(ScreenDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath . '.index');
    }

    public function create()
    {
        return view($this->viewPath . '.create');
    }

    public function store(ScreenRequest $request)
    {
        $data = $request->validated();
//        if($request->image){
//            if (is_file($request->image)) {
//                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
//                $request->image->move(public_path('/uploads/screens/'), $img_name);
//                $data['image'] = $img_name;
//            }
//        }
        $this->model::create($data);
        return redirect()->route($this->route)->with('success', 'تم الاضافة بنجاح');

    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view($this->viewPath . '.edit', compact('data'));
    }

    public function update(ScreenRequest $request, $id)
    {
        $data = $request->validated();
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/screens/'), $img_name);
                $data['image'] = $img_name;
            }
        }
        $this->model::where('id', $id)->update($data);
        return redirect()->route($this->route)->with('success', 'تم التعديل بنجاح');

    }
}
