<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.admins.index');
    }
  

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|string|email|unique:users,email",
            "password"=> "required|string|confirmed",
        ]);
        $data = $request->except(['_token', "_method"]);
        $data['email_verified_at'] = now();
        $data['password']= Hash::make($request->password);
        User::create($data);
        return redirect()->route('admin.admins.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(User $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, User $admin)
    {
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|string|email|unique:users,email",
            "password"=> "nullable|string|confirmed",
        ]);
        $data = $request->except(['_token', "_method", "password"]);
        $data['email_verified_at'] = $admin->email_verified_at ?? now();
        if($request->has('password') && strlen($request->password) > 0){
            $data['password']= Hash::make($request->password);
        }
        $admin->update($data);
        return redirect()->route('admin.admins.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(User $admin)
    {
        if($admin->id == User::first()->id){
            return response()->json(['message'=> "Cand Delete Admin"], 400);
        }
        $admin->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
