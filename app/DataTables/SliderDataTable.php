<?php

namespace App\DataTables;

use App\Models\Slider;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SliderDataTable extends DataTable
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
            ->editColumn('image', '<img class="img-thumbnail" src="{{$image}}" style="height: 75px; width: 75px;">')
            ->addColumn('action', 'dashboard.slider.parts.action')
            ->addColumn('id', function ($data) {
                return "<input type='checkbox' name='data[]' class='data-item' value='{$data['id']}'/> ";
            })
            ->rawColumns(['action', 'image','id']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Slider $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Slider $model)
    {
        return $model->orderBy('id','desc')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('slider-table')
            ->columns($this->getColumns())
            ->minifiedAjax()

            ->orderBy(0)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    ['10 صـفوف', '25 صـف', '50 صـف', 'كل الصـفوف']
                ])
            ->parameters([
                'language' => ['url' => '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json'],
                "sDom"=> "rtipl",

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
            Column::make('image')->title('الصوره'),
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
        return 'Slider_' . date('YmdHis');
    }
}
