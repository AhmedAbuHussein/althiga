<?php

namespace App\DataTables;

use App\Models\Subscribe;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SubscribesDataTable extends DataTable
{
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->addColumn('action', function($item){
            $action = '';
            if(auth()->user()->can("subscribes_delete")){
                $action = '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.subscribes.destroy', [$item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            }
            return $action;
        })
        ->editColumn('email', function($item){
            return '<a href="mailto:'.$item->email.'">'.$item->email.'</a>';
        })
        ->editColumn('course.title', function($item){
            return $item->course_id ? $item->course->title : '--------';
        })
        ->editColumn('is_all', function($item){
            return $item->is_all ? __('site.all') : '--------';
        })
        ->rawColumns(['action', 'email'])
        
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Subscribe $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Subscribe $model)
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
        $it = [];
        if (auth()->user()->can("subscribes_send_mails")){
            $it =[
                [
                    "title"=> __('site.send'),
                    "fa"=> "fa-envelope",
                    'className' => 'btn btn-primary',
                    'extend'=> "link",
                    'url'=> route('admin.subscribes.mails'),
                    "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }"
                ]
            ];
        }
        return $this->builder()
                    ->setTableId('items-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->parameters([
                        "language" => $lang,
                        'buttons' =>$it
                    ])
                    ->buttons(
                        Button::make([
                            "extend"=> "export",
                            "text"=> "function(dt, button, config){ return '<i class=\"fa fa-download\"></i> ".__('site.export')." &nbsp;<span class=\"caret\"/>'}",
                            "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }"
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
            Column::make('email')->title(__('site.email'))->addClass("text-center"),
            Column::make('course.title')->title(__('site.courses'))->addClass("text-center"),
            Column::make('is_all')->title(__('site.subscribe'))->addClass("text-center"),
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
        return 'Subscribes_' . date('YmdHis');
    }
}
