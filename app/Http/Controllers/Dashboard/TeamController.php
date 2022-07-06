<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\TeamDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\ScreenRequest;
use App\DataTables\ScreenDataTable;
use App\Http\Requests\TeamRequest;
use App\Models\Screen;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends GeneralController
{
    protected $viewPath = 'dashboard.team';
    protected $path = 'teams';
    private $route = 'teams';
    protected $paginate = 30;

    public function __construct(Team $model)
    {
        parent::__construct($model);
    }

    public function index(TeamDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath . '.index');
    }

    public function create()
    {
        return view($this->viewPath . '.create');
    }

    public function store(TeamRequest $request)
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

    public function update(TeamRequest $request, $id)
    {
        $data = $request->validated();
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/teams/'), $img_name);
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
}
