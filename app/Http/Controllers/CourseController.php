<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $reqeust)
    {
        $search = $reqeust->_q;
        $items = Course::when($search, function($query) use ($search) {
            $query->where("title->en", "LIKE", "%$search%")
                ->orWhere('title->ar', "LIKE", "%$search%");
        })->paginate(12);
        return view('courses',compact('items'));
    }
}
