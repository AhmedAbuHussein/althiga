<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CoursesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(CoursesDataTable $dataTable)
    {
        if(auth()->user()->cannot('courses_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.courses.index');
    }
    
    public function show(Course $course)
    {
        if(auth()->user()->cannot('courses_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.courses.show', compact('course'));
    }

    public function create()
    {
        if(auth()->user()->cannot('courses_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $tags = Tag::get();
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
        return view('admin.courses.create', compact('categories', 'days', 'tags'));
    }

    public function store(CourseRequest $request)
    {
        if(auth()->user()->cannot('courses_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $data = $request->except(['_token', "_method", "image", 'file', 'tags']);
        
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
            $data['image'] = uploadImage($request->file('image'), null, 'course-', true, 1024, 256);
        }
        if($request->hasFile('file')){
            $data['register_form_file'] = uploadFile($request->file('image'), null, 'course-');
        }

        $course = Course::create($data);
        $course->tags()->sync($request->tags);
        return redirect()->route('admin.courses.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Course $course)
    {
        if(auth()->user()->cannot('courses_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $tags = Tag::get();
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
        return view('admin.courses.edit', compact('course', 'categories', 'days', 'tags'));
    }

    public function update(CourseRequest $request, Course $course)
    {      
        if(auth()->user()->cannot('courses_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }

        $data = $request->except(['_token', "_method", "image", 'file', 'tags']);
        if(!$request->has('days')){
            $data['days'] = null;
        }
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
            $data['image'] = uploadImage($request->file('image'), null, 'course-', true, 1024, 256);
        }
        if($request->hasFile('file')){
            $data['register_form_file'] = uploadFile($request->file('image'), null, 'course-');
        }
        $course->tags()->sync($request->tags);
        $course->update($data);
        return redirect()->route('admin.courses.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Course $course)
    {
        if(auth()->user()->cannot('courses_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        Storage::delete([$course->image, $course->register_form_file]);
        $course->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
