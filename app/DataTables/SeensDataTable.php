<?php

namespace App\DataTables;

use App\Models\Seen;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SeensDataTable extends DataTable
{
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->addColumn('action', function($item){
            $action = '';
            if (auth()->user()->can("statistics_show")){
            $action .= '<a class="btn btn-primary py-1 ps-2 pe-2 ms-1" href="'.route('admin.statistics.show', [$item->id]).'" title="'.__('site.show').'"><i class="fa fa-eye"></i></a>';
            }
            if (auth()->user()->can("statistics_delete")){
            $action .= '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.statistics.destroy', [$item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            }
            return $action;
        })
        ->editColumn('seenable.title', function($item){
            return $item->seenable ? $item->seenable->getTranslation('title', app()->getLocale('en')) : '---------';
        })
        ->rawColumns(['action', 'seenable.title'])
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Seen $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Seen::with('seenable')->newQuery();
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
                "text"=> "function(dt, button, config){ return '<i class=\"fa fa-download\"></i> ".__('site.export')." &nbsp;<span class=\"caret\"/>'}",
                "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }",
            ])->addClass("btn btn-primary"),

            Button::make([
                "extend"=> "print",
                "text"=> "function(dt, button, config){ return '<i class=\"fa fa-print\"></i> ".__('site.print')."'}"
            ])->addClass("btn btn-info"),
            Button::make([
                "extend"=> 'reload',
                "text"=> "function(dt, button, config){ return '<i class=\"fa fa-recycle\"></i> ".__('site.reload')."'}"
            ])->addClass("btn btn-success")
        ];
        if (auth()->user()->can("statistics_delete")){
            $it = Button::make([
                "extend"=> "link",
                'url'=> route('admin.subscribes.mails'),
                "text"=> "function(dt, button, config){ return '<i class=\"fa fa-trash\"></i> ".__('site.delete')."'}",
                "init" => "function(api, node, config){ $(node).removeClass('btn-secondary'); }",
            ])->addClass("btn btn-danger");
            array_unshift($buttons, $it);
        }
        return $this->builder()
                    ->setTableId('items-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0, "desc")
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
            Column::make('id')->title(__('site.id'))->addClass("text-center"),
            Column::make('ip')->title(__('site.ip'))->addClass("text-center"),
            Column::make('domain')->title(__('site.domain'))->addClass("text-center"),
            Column::make('os_type')->title(__('site.os'))->addClass("text-center"),
            Column::computed('seenable.title')->title(__('site.courses'))->addClass("text-center"),
            Column::computed('action', __('site.action'))->exportable(false)
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
        return 'Seens_' . date('YmdHis');
    }
}
