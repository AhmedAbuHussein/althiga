<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExtrasDataTable;
use App\Http\Controllers\Controller;
use App\Models\Extra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExtraController extends Controller
{
    public function index(ExtrasDataTable $dataTable)
    {
        if(auth()->user()->cannot('about_components')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.extra.index');
    }
    
    public function show(Extra $extra)
    {
        if(auth()->user()->cannot('about_components')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.extra.show', compact('extra'));
    }

    public function create()
    {
        if(auth()->user()->cannot('about_components')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.extra.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('about_components')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"     => "required|array",
            "title.en"  => "required|string",
            "title.ar"  => "required|string",
            "text"      => "required|array",
            "text.en"   => "required|string",
            "text.ar"   => "required|string",
            "image"      => "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", "image"]);
        if($request->hasFile('image')){
            $data['icon'] = uploadImage($request->file('image'), null, 'extra-', true, 100, 100);
        }
        Extra::create($data);
        return redirect()->route('admin.extra.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Extra $extra)
    {
        if(auth()->user()->cannot('about_components')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.extra.edit', compact('extra'));
    }

    public function update(Request $request, Extra $extra)
    {
        if(auth()->user()->cannot('about_components')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
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
            $data['icon'] = uploadImage($request->file('image'), $extra->icon, 'extra-', true, 100, 100);
        }
        $extra->update($data);
        return redirect()->route('admin.extra.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Extra $extra)
    {
        if(auth()->user()->cannot('about_components')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $extra->icon;
        Storage::delete($img);
        $extra->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
