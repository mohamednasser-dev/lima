<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\PageDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\PageRequest;
use App\Models\Page;

//use File;

class PageController extends GeneralController
{
    protected $viewPath = 'dashboard.page';
    protected $path = 'pages';
    private $route = 'pages';
    protected $paginate = 30;

    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function index(PageDataTable $dataTable)
    {
        $parent_id = null;
        return $dataTable->with('parent_id', $parent_id)->render($this->viewPath . '.index');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view($this->viewPath . '.edit', compact('data'));
    }

    public function update(PageRequest $request, $id)
    {
        $data = $request->validated();
        $this->model::where('id', $id)->update($data);
        $row = $this->model::findOrFail($id);
        return redirect()->route($this->route )->with('success', 'تم التعديل بنجاح');

    }
}
