<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ContentsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Course;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(ContentsDataTable $dataTable, $course)
    {
        return $dataTable->with(['course'=> $course])->render('admin.contents.index', ['course'=> $course]);
    }
    
    public function show($course, Content $content)
    {
        return view('admin.contents.show', compact('content'));
    }

    public function create($course)
    {
        return view('admin.contents.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
        ]);
        $data = $request->except(['_token', "_method"]);
        $course->contents()->create($data);
        return redirect()->route('admin.contents.index', ["course"=>$course->id])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit($course, Content $content)
    {
        return view('admin.contents.edit', compact('content', 'course'));
    }

    public function update(Request $request, $course, Content $content)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
        ]);
        $data = $request->except(['_token', "_method"]);
        $content->update($data);
        return redirect()->route('admin.contents.index', ['course'=> $course])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy($course, Content $content)
    {
        $content->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }

   
}
