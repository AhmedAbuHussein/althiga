<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        return view('admin.profile.index', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Auth::user();
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|string|email|unique:users,email,".$admin->id,
            "password"=> "nullable|string|confirmed",
        ]);
        $data = $request->except(['_token', "_method", "password"]);
        if($request->has('password') && strlen($request->password) > 0){
            $data['password']= Hash::make($request->password);
        }
        $admin->update($data);
        return redirect()->route('admin.admins.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
        

    }
}
