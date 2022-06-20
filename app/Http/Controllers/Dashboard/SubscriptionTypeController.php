<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CityDataTable;
use App\DataTables\SubscriptionTypesDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\CityRequest;
use App\Http\Requests\General\MultiDelete;
use App\Http\Requests\subscription_typeRequest;
use App\Models\City;
use App\Models\SubscribeType;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class SubscriptionTypeController extends GeneralController
{
    protected $viewPath = 'subscription_type';
    protected $path = 'subscription_types';
    private $route = 'subscription_types';
    protected $paginate = 30;

    public function __construct(SubscribeType $model)
    {
        parent::__construct($model);
    }

    public function index(SubscriptionTypesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.subscription_type.index');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view('dashboard.subscription_type.edit', compact('data'));
    }

    public function update(subscription_typeRequest $request, $id)
    {
        $data = $request->validated();
        $this->model::where('id', $id)->update($data);;
        return redirect()->route($this->route)->with('success', 'تم التعديل بنجاح');
    }

}
