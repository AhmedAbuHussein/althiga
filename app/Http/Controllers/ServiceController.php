<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $items = Category::_get();
        return view('services', compact('items'));
    }

    public function show(Request $request, $slug)
    {
        $category = Category::whereSlug($slug)->first();
        $search = $request->_q;
        $items = Course::where('category_id', $category->id)->paginate(12);
        return view('service', compact('items', 'category'));
    }
}
