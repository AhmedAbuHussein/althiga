<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        if(auth()->user()->cannot('admin_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.admins.index');
    }
  

    public function create()
    {
        if(auth()->user()->cannot('admin_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $roles = Role::get();
        return view('admin.admins.create', compact('roles'));
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('admin_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|string|email|unique:users,email",
            "password"=> "required|string|confirmed",
            "roles"=> "required|array",
            "roles.*"=> "required|numeric|exists:roles,id",
        ]);
        $data = $request->except(['_token', "_method"]);
        $data['email_verified_at'] = now();
        $data['password']= Hash::make($request->password);
        $admin = User::create($data);
        $admin->syncRoles($request->roles);
        return redirect()->route('admin.admins.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(User $admin)
    {
        if(auth()->user()->cannot('admin_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $roles = Role::get();
        return view('admin.admins.edit', compact('admin', 'roles'));
    }

    public function update(Request $request, User $admin)
    {
        if(auth()->user()->cannot('admin_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|string|email|unique:users,email,".$admin->id,
            "password"=> "nullable|string|confirmed",
            "roles"=> "required|array",
            "roles.*"=> "required|numeric|exists:roles,id",
        ]);
        $data = $request->except(['_token', "_method", "password"]);
        $data['email_verified_at'] = $admin->email_verified_at ?? now();
        if($request->has('password') && strlen($request->password) > 0){
            $data['password']= Hash::make($request->password);
        }
        $admin->update($data);
        $admin->syncRoles($request->roles);
        return redirect()->route('admin.admins.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(User $admin)
    {
        if(auth()->user()->cannot('admin_edit')){
            return response()->json(['message'=> __('site.item deleted successfully')], 200);
        }
        if($admin->id == User::first()->id){
            return response()->json(['message'=> "Cand Delete Admin"], 400);
        }
        $admin->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
