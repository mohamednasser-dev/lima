<?php

namespace App\DataTables;

use App\Models\Brand;
use App\Models\Coupon;
use App\Models\Order;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        {
            return datatables()
                ->eloquent($query)
                ->editColumn('shipping_type', function(Order $order){
                    return __('lang.shipping_types.'.$order->shipping_type);
                })
                ->editColumn('order_date', function(Order $order){
                    return $order->order_date->toDateString();
                })
                ->editColumn('status', function(Order $order){
                    return "<span class='badge badge-warning'>".__('lang.order_status.'.$order->status)."</span>";
                })
                ->editColumn('total', function(Order $order){
                    return $order->total . ' '.__('lang.currency');
                })
                ->addColumn('action', 'dashboard.order.parts.action')
                ->addColumn('id', function ($data) {
                    return "<input type='checkbox' name='data[]' class='data-item' value='{$data['id']}'/> ";
                })
                ->rawColumns(['status', 'action', 'id']);
        }
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Brand $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Order $model)
    {
        return $model->newQuery()
                    ->with('user:id,name')
                    ->select('orders.*')
                    ->orderBy('created_at','desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('coupon-table')
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
            Column::make('id')->name('id')->class('text-center')->title('#'),
            Column::make('user.name')->name('user.name')->class('text-center')->title(__('lang.customer_name')),
            Column::make('shipping_type')->class('text-center')->title(__('lang.shipping_type')),
            Column::make('shipping_count')->class('text-center')->title(__('lang.shipping_count')),
            Column::make('order_date')->class('text-center')->title(__('lang.order_date')),
            Column::make('total')->class('text-center')->title(__('lang.total')),
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
        return 'orders_' . date('YmdHis');
    }
}
