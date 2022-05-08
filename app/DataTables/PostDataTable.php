<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Post;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PostDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('image', '<img class="img-thumbnail" src="{{$image}}" style="height: 75px; width: 75px;">')
            ->addColumn('action', 'dashboard.post.parts.action')
            ->addColumn('free_btn', 'dashboard.post.parts.free_btn')
            ->escapeColumns(['name_en'])
            ->editColumn('likes_count', function(Post $post){
                return $post->Likes->count();
            })
            ->editColumn('views_count', function(Post $post){
                return $post->Views->count();
            })
            ->addColumn('id', function ($data) {
                return "<input type='checkbox' name='data[]' class='data-item' value='{$data['id']}'/> ";
            })
            ->rawColumns(['action', 'image', 'id','likes_count','views_count','free_btn']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\City $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Post $model)
    {
        $type = $this->type;
        return $model->newQuery()->where('type', $type)->orderBy('created_at', 'desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('post-table')
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
            Column::make('image')->class('text-center')->title('الصورة الاساسية'),
            Column::make('name_ar')->class('text-center')->title('عنوان الفيديو'),
            Column::make('likes_count')->class('text-center')->title('عدد الاعجابات'),
            Column::make('views_count')->class('text-center')->title('عدد المشاهدات'),
            Column::make('free_btn')->class('text-center')->title('مجانا'),
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
