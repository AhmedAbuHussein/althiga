<?php

namespace App\DataTables;

use App\Models\Content;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ContentsDataTable extends DataTable
{
    
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->addColumn('action', function($item){
            $action = '';
            if (auth()->user()->can("contents_edit")){
                $action .= '<a class="btn btn-success py-1 ps-2 pe-2" href="'.route('admin.contents.edit', [$item->id]).'" title="'.__('site.edit').'"><i class="fa fa-edit"></i></a>';
            }
            if (auth()->user()->can("contents_delete")){
            $action .= '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.contents.destroy', ['course'=> $this->course, 'content'=> $item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            }
            return $action;
        })
        ->addColumn('uid', function($item) {
            static $id = 1;
            return $id++;
        })
        ->editColumn('title', function($item){
            return $item->getTranslation('title', app()->getLocale());
        })
        ->editColumn('created_at', function($item){
            return $item->created_at->format('Y-m-d');
        })
        ->filterColumn('title', function($query, $keyword) {
            $query->where(function($builder) use($keyword){
                $builder->where('title->en',"LIKE","%{$keyword}%")->orWhere("title->ar", "LIKE","%{$keyword}%");
            });
        })
        ->rawColumns(['action', 'title', 'created_at'])
        
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Content $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Content::where('course_id', $this->course)->newQuery();
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
        $buttons= [
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
        ];
        if (auth()->user()->can("contents_create")){
            $it = Button::make([
                "extend"=> "create",
                "text"=> "function(dt, button, config){ return '<i class=\"fa fa-plus\"></i> ".__('site.create')."'}",
                "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }"
            ])->addClass("btn btn-primary");
            array_unshift($buttons, $it);
        }
        return $this->builder()
                    ->setTableId('items-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0, "asc")
                    ->parameters([
                        "language" => $lang,
                    ])
                    ->buttons($buttons);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('uid')->title(__('site.id'))->addClass("text-center"),
            Column::make('title')->title(__('site.title'))->addClass("text-center"),
            Column::make('created_at')->title(__('site.created_at'))->addClass("text-center"),
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
        return 'Contents_' . date('YmdHis');
    }
}
