<?php

namespace App\DataTables;

use App\Models\SubscriptionHistory;
use App\Models\Team;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SubscriptionDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('selected_user_name', function(SubscriptionHistory $sub){
                return $sub->User->name;
            })
            ->addColumn('action', 'dashboard.subscription.parts.action')
            ->rawColumns(['action','user_name','sub_type']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\City $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(SubscriptionHistory $model)
    {
        return $model->newQuery()->orderBy('id', 'desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('subscription-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(0)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    ['10 صـفوف', '25 صـف', '50 صـف', 'كل الصـفوف']
                ])
            ->parameters([
                'language' => ['url' => '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json']
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name_ar')->class('text-center')->title('نوع الاشتراك'),
            Column::make('selected_user_name')->class('text-center')->title('اسم المستخدم'),
            Column::make('phone')->class('text-center')->title('رقم الهاتف'),
            Column::make('started_at')->class('text-center')->title('يبدأ في'),
            Column::make('ended_at')->class('text-center')->title('ينتهي في'),
            Column::make('cost')->class('text-center')->title('مبلغ الاشتراك'),
            Column::make('type_name')->class('text-center')->title('طريقة الدفع'),
            Column::make('status_text')->class('text-center')->title('حالة الاشتراك'),
            Column::make('action')->class('text-center')->title('الاجرائات'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Team_' . date('YmdHis');
    }
}
