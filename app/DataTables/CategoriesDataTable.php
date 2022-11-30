<?php

namespace App\DataTables;

use App\Models\Category;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoriesDataTable extends DataTable
{
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->editColumn("updated_at", function($item){
            return $item->updated_at->format('Y-m-d');
        })
        ->addColumn('action', function($item){
            $action = '<a class="btn btn-success py-1 ps-2 pe-2" href="'.route('admin.categories.edit', ['category'=> $item->id]).'" title="'.__('site.edit').'"><i class="fa fa-edit"></i></a>';
            $action .= '<a class="btn btn-primary py-1 ps-2 pe-2 ms-1" href="'.route('admin.categories.show', ['category'=> $item->id]).'" title="'.__('site.show').'"><i class="fa fa-eye"></i></a>';
            $action .= '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.categories.destroy', ['category'=> $item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            return $action;
        })
        ->editColumn('title', function($item){
            return $item->getTranslation('title', app()->getLocale());
        })
        ->editColumn('icon', function($item){
            return '<img src="'.$item->url.'" style="width:60px;">';
        })
        ->filterColumn('title', function($query, $keyword) {
            $query->where(function($builder) use($keyword){
                $builder->where('title->en',"LIKE","%{$keyword}%")->orWhere("title->ar", "LIKE","%{$keyword}%");
            });
        })
        ->rawColumns(['action', 'icon'])
        
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('categories-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->parameters([
                        "language" => [
                            "url"=> "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
                        ],
                    ])
                    ->buttons(
                        Button::make('create')->addClass("btn btn-primary")->text(__('site.create')),
                        Button::make('export')->addClass("btn btn-danger")->text(__('site.export')),
                        Button::make('print')->addClass("btn btn-info")->text(__('site.print')),
                        Button::make('reload')->addClass("btn btn-success")->text(__('site.reload'))
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title(__('site.id'))->addClass("text-center"),
            Column::make('title')->title(__('site.title'))->addClass("text-center"),
            Column::make('icon')->title(__('site.image'))->addClass("text-center"),
            Column::computed('action', __('site.action')) ->exportable(false)
            ->printable(false)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Categories_' . date('YmdHis');
    }
}
