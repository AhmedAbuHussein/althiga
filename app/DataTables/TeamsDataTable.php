<?php

namespace App\DataTables;

use App\Models\Team;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TeamsDataTable extends DataTable
{
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->addColumn('action', function($item){
            $action = '<a class="btn btn-success py-1 ps-2 pe-2" href="'.route('admin.team.edit', [$item->id]).'" title="'.__('site.edit').'"><i class="fa fa-edit"></i></a>';
            $action .= '<a class="btn btn-primary py-1 ps-2 pe-2 ms-1" href="'.route('admin.team.show', [$item->id]).'" title="'.__('site.show').'"><i class="fa fa-eye"></i></a>';
            $action .= '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.team.destroy', [$item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            return $action;
        })
        ->editColumn('name', function($item){
            return $item->getTranslation('name', app()->getLocale());
        })
        ->editColumn('title', function($item){
            return $item->getTranslation('title', app()->getLocale());
        })
        ->editColumn('image', function($item){
            return '<img src="'.$item->url.'" style="width:60px;">';
        })
        ->filterColumn('title', function($query, $keyword) {
            $query->where(function($builder) use($keyword){
                $builder->where('name->en',"LIKE","%{$keyword}%")
                ->orWhere("name->ar", "LIKE","%{$keyword}%")
                ->orWhere("title->ar", "LIKE","%{$keyword}%")
                ->orWhere("title->ar", "LIKE","%{$keyword}%");
            });
        })
        ->rawColumns(['action', 'image', 'name', 'title'])
        
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Team $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Team $model)
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
        $lang = [];
        if(app()->isLocale('ar')){
            $lang = [
                "url"=> asset('lang/arabic.json')  
            ];
        }
        return $this->builder()
                    ->setTableId('teams-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->parameters([
                        "language" => $lang,
                    ])
                    ->buttons(
                        Button::make([
                            "extend"=> "create",
                            "text"=> "function(dt, button, config){ return '<i class=\"fa fa-plus\"></i> ".__('site.create')."'}",
                            "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }"
                        ])->addClass("btn btn-primary"),
                        Button::make([
                            "extend"=> "export",
                            "text"=> "function(dt, button, config){ return '<i class=\"fa fa-download\"></i> ".__('site.export')." &nbsp;<span class=\"caret\"/>'}"
                        ])->addClass("btn btn-danger"),

                        Button::make([
                            "extend"=> "print",
                            "text"=> "function(dt, button, config){ return '<i class=\"fa fa-print\"></i> ".__('site.print')."'}"
                        ])->addClass("btn btn-info"),
                        Button::make([
                            "extend"=> 'reload',
                            "text"=> "function(dt, button, config){ return '<i class=\"fa fa-recycle\"></i> ".__('site.reload')."'}"
                        ])->addClass("btn btn-success")
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
            Column::make('name')->title(__('site.name'))->addClass("text-center"),
            Column::make('title')->title(__('site.title'))->addClass("text-center"),
            Column::make('image')->title(__('site.image'))->addClass("text-center"),
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
        return 'Teams_' . date('YmdHis');
    }
}
