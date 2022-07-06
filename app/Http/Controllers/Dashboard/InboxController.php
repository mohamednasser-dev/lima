<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CityDataTable;
use App\DataTables\InboxataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\General\MultiDelete;
use App\Http\Requests\AdminRequest;
use App\DataTables\AdminDataTable;
use App\Models\Inbox;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\Admin;

class InboxController extends GeneralController
{
    protected $viewPath = 'admin.';
    protected $path = 'admins';
    private $route = 'admins';

    public function __construct(Admin $model)
    {
        parent::__construct($model);
    }


    public function inbox(InboxataTable $dataTable)
    {
        Inbox::where('seen_at', null)->update(['seen_at' => Carbon::now()]);
        return $dataTable->render('dashboard.inbox.index');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);

        return view('dashboard.inbox.edit', compact('data'));
    }


    public function destroy($id)
    {
        $inbox = Inbox::findOrFail($id);
        $inbox->delete();
        return redirect()->route('inbox')->with('success', 'تم الحذف بنجاح');
    }

}
