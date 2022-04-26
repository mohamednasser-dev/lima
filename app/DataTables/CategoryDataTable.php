<?php

namespace App\DataTables;

use App\Models\Category;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('image', '<img class="img-thumbnail" src="{{$image}}" style="height: 75px; width: 75px;">')
            ->addColumn('action', 'dashboard.category.parts.action')
            ->addColumn('subcategories', 'dashboard.category.parts.subcategories')
            ->editColumn('posts_count', function(Category $category){
                return $category->Posts->count();
            })
            ->addColumn('id', function ($data) {
                return "<input type='checkbox' name='data[]' class='data-item' value='{$data['id']}'/> ";
            })
            ->rawColumns(['action', 'subcategories', 'image', 'id','posts_count']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\City $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model)
    {
        $parent_id = $this->parent_id;
        return $model->newQuery()->where('parent_id', $parent_id)->orderBy('created_at', 'desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('category-table')
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
            Column::make('image')->class('text-center')->title('صورة القسم'),
            Column::make('name_ar')->class('text-center')->title('الاسم بالعربيه'),
            Column::make('name_en')->class('text-center')->title('الاسم بالانجليزيه'),
            Column::make('posts_count')->class('text-center')->title('المحتوى'),
            Column::make('subcategories')->class('text-center')->title('الاقسام الفرعية'),
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
        return 'Category_' . date('YmdHis');
    }
}
