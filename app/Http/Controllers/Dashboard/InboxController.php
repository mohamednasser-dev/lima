<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\InboxDataTable;
use App\Http\Controllers\GeneralController;
use App\Models\Inbox;

class InboxController extends GeneralController
{
    protected $viewPath = 'inbox';
    protected $path = 'inboxes';
    private $route = 'inboxes';
    protected $paginate = 30;

    public function __construct(Inbox $model)
    {
        parent::__construct($model);
    }

    public function index(InboxDataTable $dataTable)
    {
        return $dataTable->render('dashboard.' . $this->viewPath . '.index');
    }

    public function show($id)
    {
        $data = Inbox::findOrFail($id);
        $data->seen = "1";
        $data->save();
        return view('dashboard.' . $this->viewPath . '.details', compact('data'));
    }
}
