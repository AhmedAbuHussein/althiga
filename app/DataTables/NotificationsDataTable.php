<?php

namespace App\DataTables;

use App\Models\Notification;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NotificationsDataTable extends DataTable
{
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->addColumn('action', function($item){
            $action = '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.notifications.destroy', [$item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            $action .= '<button class="btn btn-success py-1 ps-2 pe-2 ms-1" onclick="markAsRead(`'.route('admin.notifications.mark', [$item->id]).'`)" title="'.__('site.mark as read').'"><i class="fa fa-check"></i></button>';
            return $action;
        })
        ->addColumn('uid', function($item){
            static $id = 1;
            return $id++;
        })
        ->editColumn('title', function($item){
            return '<a href="'.$item->route.'">'. $item->data['title'][app()->getLocale()] .'</a>';
        })
        ->editColumn('message', function($item){
            return $item->data['message'][app()->getLocale()];
        })
        ->editColumn('read_at', function($item){
            return $item->read_at ? $item->read_at->format("Y-m-d"): '-----';
        })
        ->rawColumns(['action', 'title', 'message', "uid"])
        
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Notification $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return auth()->user()->notifications()->newQuery();
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
                    ->setTableId('items-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0, 'asc')
                    ->parameters([
                        "language" => $lang,
                    ])
                    ->buttons(
                        Button::make([
                            "extend"=> "link",
                            'url'=> route('admin.notifications.read'),
                            "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }",
                            "text"=> "function(dt, button, config){ return '<i class=\"fa fa-link\"></i> ".__('site.mark as read')."'}"
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
            Column::computed('uid')->title(__('site.id'))->addClass("text-center"),
            Column::make('title')->title(__('site.title'))->addClass("text-center")->orderable(false),
            Column::make('message')->title(__('site.message'))->addClass("text-center")->orderable(false),
            Column::make('read_at')->title(__('site.read_at'))->addClass("text-center"),
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
        return 'Notifications_' . date('YmdHis');
    }
}
