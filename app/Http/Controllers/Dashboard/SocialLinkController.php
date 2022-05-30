<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\LinkDataTable;
use App\DataTables\TeamDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\LinkRequest;
use App\Http\Requests\ScreenRequest;
use App\DataTables\ScreenDataTable;
use App\Http\Requests\TeamRequest;
use App\Models\Screen;
use App\Models\SocialLink;
use App\Models\Team;

class SocialLinkController extends GeneralController
{
    protected $viewPath = 'dashboard.link';
    protected $path = 'links';
    private $route = 'links';
    protected $paginate = 30;

    public function __construct(SocialLink $model)
    {
        parent::__construct($model);
    }

    public function index(LinkDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath . '.index');
    }

    public function create()
    {
        return view($this->viewPath . '.create');
    }

    public function store(LinkRequest $request)
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

    public function update(LinkRequest $request, $id)
    {
        $data = $request->validated();
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/links/'), $img_name);
                $data['image'] = $img_name;
            }
        }
        $this->model::where('id', $id)->update($data);
        return redirect()->route($this->route)->with('success', 'تم التعديل بنجاح');

    }
}
