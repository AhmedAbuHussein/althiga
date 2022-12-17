<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(RolesDataTable $dataTable)
    {
        if(auth()->user()->cannot('roles_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.roles.index');
    }

    public function show(Role $role)
    {
        if(auth()->user()->cannot('roles_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.roles.show', compact('role'));
    }

    public function create()
    {
        if(auth()->user()->cannot('roles_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $items = Permission::orderBy("name")->get();
        return view('admin.roles.create', compact('items'));
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('roles_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "name"=> "required|string|unique:roles,name",
            "permissions"=> "required|array",
            "permissions.*" => "required|numeric|exists:permissions,id",
        ]);

        $role = Role::create(['name'=> $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->route('admin.roles.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }

    public function edit(Role $role)
    {
        if(auth()->user()->cannot('roles_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $items = Permission::orderBy("name")->get();
        return view('admin.roles.edit', compact('role', 'items'));
    }

    public function update(Request $request, Role $role)
    {
        if(auth()->user()->cannot('roles_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "name"=> "required|string|unique:roles,name,".$role->id,
            "permissions"=> "required|array",
            "permissions.*" => "required|numeric|exists:permissions,id",
        ]);

        $role->update(['name'=> $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->route('admin.roles.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }

    public function destroy(Role $role)
    {
        if(auth()->user()->cannot('roles_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $role->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
