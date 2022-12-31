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
        if(auth()->user()->cannot('contents_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->with(['course'=> $course])->render('admin.contents.index', ['course'=> $course]);
    }
   
    public function create($course)
    {
        if(auth()->user()->cannot('contents_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.contents.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        if(auth()->user()->cannot('contents_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
        ]);
        $data = $request->except(['_token', "_method"]);
        $course->contents()->create($data);
        return redirect()->route('admin.contents.create', ["course"=>$course->id])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit($course, Content $content)
    {
        if(auth()->user()->cannot('contents_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.contents.edit', compact('content', 'course'));
    }

    public function update(Request $request, $course, Content $content)
    {
        if(auth()->user()->cannot('contents_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
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
        if(auth()->user()->cannot('contents_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $content->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }

   
}
