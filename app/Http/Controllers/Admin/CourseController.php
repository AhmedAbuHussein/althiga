<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CoursesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
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

    public function store(CourseRequest $request)
    {
        $data = $request->except(['_token', "_method", "image", 'file']);
        
        if($request->show_single_price == "0"){ 
            $data['price'] = NULL;
            $data['discount_price'] = NULL;
        }else{
            $data['price_role'] = NULL;
        }

        if($request->show_group_price == "0"){ 
            $data['group_price'] = NULL;
            $data['discount_group_price'] = NULL;
        }else{
            $data['group_price_role'] = NULL;
        }

        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'course-', true, 2048, 1024);
        }
        if($request->hasFile('file')){
            $data['register_form_file'] = uploadFile($request->file('image'), null, 'course-');
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
        $days = [
            'saturday',
            'sunday',
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday'
           ];
        return view('admin.courses.edit', compact('course', 'categories', 'days'));
    }

    public function update(CourseRequest $request, Course $course)
    {      
        $data = $request->except(['_token', "_method", "image", 'file']);

        if($request->show_single_price == "0"){ 
            $data['price'] = NULL;
            $data['discount_price'] = NULL;
        }else{
            $data['price_role'] = NULL;
        }

        if($request->show_group_price == "0"){ 
            $data['group_price'] = NULL;
            $data['discount_group_price'] = NULL;
        }else{
            $data['group_price_role'] = NULL;
        }

        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'course-', true, 2048, 1024);
        }
        if($request->hasFile('file')){
            $data['register_form_file'] = uploadFile($request->file('image'), null, 'course-');
        }
        $course->update($data);
        return redirect()->route('admin.courses.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Course $course)
    {
        Storage::delete([$course->image, $course->register_form_file]);
        $course->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
