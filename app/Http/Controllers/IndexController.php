<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        $categories = Category::where("show_in_menu", 1)->get();
        $about = About::first();
        $team = Team::get();
        $courses = Course::where('is_popular', 1)->get();
        $partners = Partner::get();
        return view('index', compact('slider', 'categories', 'about', 'team', 'courses', 'partners'));
    }
}
