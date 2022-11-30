<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function change_mode()
    {
        if(session()->has('mode') && session()->get('mode', 'light') == "dark"){
            session()->put('mode', 'light');
        }else{
            session()->put('mode', 'dark');
        }
        return response()->json();
    }
    
}
