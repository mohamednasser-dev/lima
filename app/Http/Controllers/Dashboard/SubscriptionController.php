<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\SubscriptionDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\TeamRequest;
use App\DataTables\TeamDataTable;
use App\Models\SubscriptionHistory;
use App\Models\User;

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
        $subscription = $this->model::findOrFail($id);
        $subscription->status = $status ;
        $subscription->save() ;
        if($status == 'accepted'){
            $user_data['subscriber'] = 1;
            $user_data['subscription_ended_at'] = $subscription->ended_at;
            User::find($subscription->user_id)->update($user_data);
        }
        return redirect()->back()->with('success','تم تغيير الحالة بنجاح');
    }

}
