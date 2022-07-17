<?php

namespace App\DataTables;

use App\Models\City;
use App\Models\Coupon;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CouponDataTable extends DataTable
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
//            ->addColumn('active_btn', 'dashboard.coupons.parts.active_btn')
            ->addColumn('action', 'dashboard.coupons.parts.action')
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\City $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Coupon $model)
    {
        return $model->newQuery()->orderBy('id','desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('coupons-table')
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
            Column::make('code')->title('كود الكوبون'),
            Column::make('from_date')->title('من تاريخ'),
            Column::make('to_date')->title('الى تاريخ'),
            Column::make('amount')->title('نسبة الخصم (%)'),
            Column::make('usage_count')->title('عدد استخدامات الكوبون'),
            Column::make('action')->title('الاجرائات'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'coupons_' . date('YmdHis');
    }
}
