<?php

namespace App\Http\Controllers;

use App\Models\CourseTerm;
use App\Models\InstituteTerm;
use Illuminate\Http\Request;

class AramcoRegistrationController extends Controller
{
    public function index(){
        return view('aramco.index');
    }

    public function terms(){
        $items = InstituteTerm::get();
        return view('aramco.terms', ['items'=> $items])->render();
    }

    public function privacy(){
        $items = CourseTerm::get();
        return view('aramco.terms', ['items'=> $items])->render();
    }
}
