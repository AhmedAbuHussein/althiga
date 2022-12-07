<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CoursesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(CoursesDataTable $dataTable)
    {
        return $dataTable->render('admin.courses.index');
    }
    
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    public function create()
    {
        $categories = Category::get();
        $days = [
            'saturday',
            'sunday',
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday'
           ];
        return view('admin.courses.create', compact('categories', 'days'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "text"=> "required|array",
            "text.en"=> "required|string",
            "text.ar"=> "required|string",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", "image"]);
        if($request->hasFile('image')){
            $data['icon'] = uploadImage($request->file('image'), null, 'course-', true, 100, 100);
        }
        Course::create($data);
        return redirect()->route('admin.courses.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Course $course)
    {
        $categories = Category::get();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "text"=> "required|array",
            "text.en"=> "required|string",
            "text.ar"=> "required|string",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", "image"]);
        if($request->hasFile('image')){
            $data['icon'] = uploadImage($request->file('image'), $course->icon, 'course-', true, 100, 100);
        }
        $course->update($data);
        return redirect()->route('admin.courses.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Course $course)
    {
        $img = $course->image;
        Storage::delete($img);
        $course->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
