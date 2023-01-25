<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function show($slug)
    {
        $setting = Setting::where('key', "course_panner")->pluck('value')->first();
        $panner = $setting ? Storage::url($setting) : asset('web/img/sub-pages-background.jpg');
        $course = Course::whereSlug($slug)->with(["category", "targets", "contents"])->firstOrFail();
        return view('course_single', compact('course', 'panner'));
    }
}
