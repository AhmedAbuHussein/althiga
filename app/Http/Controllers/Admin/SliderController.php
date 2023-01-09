<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SlidersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(SlidersDataTable $dataTable)
    {
        if(auth()->user()->cannot('slider_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.sliders.index');
    }
    
    public function show(Slider $slider)
    {
        if(auth()->user()->cannot('slider_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.sliders.show', compact('slider'));
    }

    public function create()
    {
        if(auth()->user()->cannot('slider_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('slider_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "nullable|array",
            "title.en"=> "nullable|string",
            "title.ar"=> "nullable|string",
            "text"=> "nullable|array",
            "text.en"=> "nullable|string",
            "text.ar"=> "nullable|string",
            "link"=> "nullable|url",
            "image"=> "required|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'slider-', true, 2048, 1356);
        }
        Slider::create($data);
        return redirect()->route('admin.sliders.create')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Slider $slider)
    {
        if(auth()->user()->cannot('slider_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        if(auth()->user()->cannot('slider_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "nullable|array",
            "title.en"=> "nullable|string",
            "title.ar"=> "nullable|string",
            "text"=> "nullable|array",
            "text.en"=> "nullable|string",
            "text.ar"=> "nullable|string",
            "link"=> "nullable|url",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $slider->image, 'slider-', true,  2048, 1356);
        }
        $slider->update($data);
        return redirect()->route('admin.sliders.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Slider $slider)
    {
        if(auth()->user()->cannot('slider_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $slider->image;
        Storage::delete($img);
        $slider->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
