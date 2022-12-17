<?php

namespace App\DataTables;

use Spatie\Permission\Models\Role;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class RolesDataTable extends DataTable
{
    
    public function ajax()
    {
        return datatables()
        ->eloquent(app()->call([$this, 'query']))
        ->addColumn('action', function($item){
            $action = '';
            if (auth()->user()->can("roles_edit")){
                $action .= '<a class="btn btn-success py-1 ps-2 pe-2" href="'.route('admin.roles.edit', [$item->id]).'" title="'.__('site.edit').'"><i class="fa fa-edit"></i></a>';
            }
            if (auth()->user()->can("roles_show")){
            $action .= '<a class="btn btn-primary py-1 ps-2 pe-2 ms-1" href="'.route('admin.roles.show', [$item->id]).'" title="'.__('site.show').'"><i class="fa fa-eye"></i></a>';
            }
            if (auth()->user()->can("roles_delete")){
            $action .= '<button class="btn btn-danger py-1 ps-2 pe-2 ms-1" onclick="deleteItem(`'.route('admin.roles.destroy', [$item->id]).'`)" title="'.__('site.delete').'"><i class="fa fa-trash"></i></button>';
            }
            return $action;
        })
        ->rawColumns(['action'])
        
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Role::withCount(['permissions', 'users'])->newQuery();
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
        if (auth()->user()->can("roles_create")){
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
                    ->orderBy(1)
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
            Column::make('name')->title(__('site.title'))->addClass("text-center"),
            Column::make('users_count')->title(__('site.admin'))->addClass("text-center"),
            Column::make('permissions_count')->title(__('site.permissions'))->addClass("text-center"),
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
        return 'Roles_' . date('YmdHis');
    }
}
