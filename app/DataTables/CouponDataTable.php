<?php

namespace App\DataTables;

use App\Models\Brand;
use App\Models\Coupon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
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
        {
            return datatables()
                ->eloquent($query)
                ->addColumn('coupon_usage', 'dashboard.coupon.parts.coupon_usage')
                ->addColumn('type_txt', 'dashboard.coupon.parts.type')
                ->addColumn('active_btn', 'dashboard.coupon.parts.active')
                ->addColumn('action', 'dashboard.coupon.parts.action')
                ->addColumn('id', function ($data) {
                    return "<input type='checkbox' name='data[]' class='data-item' value='{$data['id']}'/> ";
                })
                ->rawColumns(['action','active_btn','coupon_usage','type_txt','id']);
        }
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Brand $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Coupon $model)
    {
        return $model->newQuery()->orderBy('created_at','desc');
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
            Column::make('id')
                ->title("<input type='checkbox' id='DataSelect' class='select-checkbox'>")
                ->orderable(false)
                ->width(30),
            Column::make('code')->class('text-center')->title('كود الخصم'),
            Column::make('type_txt')->class('text-center')->title('نوع الخصم'),
            Column::make('amount')->class('text-center')->title('قيمة الخصم'),
            Column::make('min_order_total')->class('text-center')->title('اقل قيمة للفاتورة'),
            Column::make('expired_at')->class('text-center')->title('ينتهي في'),
            Column::make('coupon_usage')->class('text-center')->title('عدد استخدامات الكوبون'),
            Column::make('active_btn')->class('text-center')->title('التفعيل'),
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
        return 'Coupon_' . date('YmdHis');
    }
}
