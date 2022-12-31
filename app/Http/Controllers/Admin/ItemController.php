<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ItemsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Course;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(ItemsDataTable $dataTable, $course, $content)
    {
        if(auth()->user()->cannot('contents_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->with(['course'=> $course, 'content'=> $content])->render('admin.contents.items.index', ['course'=> $course, 'content'=> $content]);
    }
    
    
    public function create($course, $content)
    {
        if(auth()->user()->cannot('contents_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.contents.items.create', compact('course', 'content'));
    }

    public function store(Request $request, $course, Content $content)
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
        $data['course_id']= $course;
        $content->items()->create($data);
        return redirect()->route('admin.items.index', ["course"=>$course, 'content'=> $content->id])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit($course, $content, Content $item)
    {
        if(auth()->user()->cannot('contents_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.contents.items.edit', compact('content', 'course', 'item'));
    }

    public function update(Request $request, $course, $content, Content $item)
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
        $item->update($data);
        return redirect()->route('admin.items.index', ["course"=>$course, 'content'=> $content])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy($course, $content, Content $item)
    {
        if(auth()->user()->cannot('contents_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $item->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
