<?php

namespace App\DataTables;

use App\Models\OrderShipping;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class OrderShippingDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('status', function(OrderShipping $shipping){
                $class = $shipping->isPending() ? 'badge-warning' : 'badge-success';
                $updateStatus = $shipping->isPending() ? 'btn update-status' : '';
                return "<span class='badge {$class} {$updateStatus}' data-id='$shipping->id'>".__('lang.order_status.'.$shipping->status)."</span>";
            })
            ->editColumn('date', function(OrderShipping $shipping){
                return $shipping->date->format('Y-m-d');
            })
            ->addColumn('action', 'dashboard.shipping.parts.action')
            ->rawColumns(['status', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\OrderShipping $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(OrderShipping $model)
    {
        return $model->with('user:id,name', 'order:id,price')
                    ->newQuery()
                    ->select('*', DB::raw('datediff(date, now()) as `diff`'))
                    ->orderBy('diff')
                    ->orderBy('status');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('ordershippingdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax();
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->name('id')->class('text-center')->title('#'),
            Column::make('user.name')->name('user.name')->class('text-center')->title(__('lang.customer_name')),
            Column::make('order.price')->class('text-center')->title(__('lang.price')),
            Column::make('date')->class('text-center')->title(__('lang.date')),
            Column::make('status')->class('text-center')->title(__('lang.status')),
            Column::make('action')->class('text-center')->title(__('lang.actions')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'orderShipping_' . date('YmdHis');
    }
}
