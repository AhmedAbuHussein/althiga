<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TagsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(TagsDataTable $dataTable)
    {
        if(auth()->user()->cannot('tags_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.tags.index');
    }
    
    public function create()
    {
        if(auth()->user()->cannot('tags_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('tags_create')){
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
        Tag::create($data);
        return redirect()->route('admin.tags.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Tag $tag)
    {
        if(auth()->user()->cannot('tags_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        if(auth()->user()->cannot('tags_edit')){
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
        $tag->update($data);
        return redirect()->route('admin.tags.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Tag $tag)
    {
        if(auth()->user()->cannot('tags_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $tag->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
