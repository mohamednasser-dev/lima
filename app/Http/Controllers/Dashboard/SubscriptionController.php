<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\SubscriptionDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\TeamRequest;
use App\DataTables\TeamDataTable;
use App\Models\SubscriptionHistory;

class SubscriptionController extends GeneralController
{
    protected $viewPath = 'dashboard.subscription';
    protected $path = 'subscriptions';
    private $route = 'subscriptions';
    protected $paginate = 30;

    public function __construct(SubscriptionHistory $model)
    {
        parent::__construct($model);
    }

    public function index(SubscriptionDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath . '.index');
    }


    public function change_status($status,$id)
    {
        $this->model::findOrFail($id)->update(['status'=>$status]);
        return redirect()->back()->with('success','تم تغيير الحالة بنجاح');
    }

}
