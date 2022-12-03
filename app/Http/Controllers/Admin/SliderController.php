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
        return $dataTable->render('admin.sliders.index');
    }
    
    public function show(Slider $slider)
    {
        return view('admin.sliders.show', compact('slider'));
    }

    public function create()
    {
        return view('admin.sliders.create');
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
            "link"=> "nullable|url",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'slider-', true, 2048, 1024);
        }
        Slider::create($data);
        return redirect()->route('admin.sliders.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "text"=> "required|array",
            "text.en"=> "required|string",
            "text.ar"=> "required|string",
            "link"=> "nullable|url",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $slider->image, 'slider-', true,  2048, 1024);
        }
        $slider->update($data);
        return redirect()->route('admin.sliders.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Slider $slider)
    {
        $img = $slider->image;
        Storage::delete($img);
        $slider->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
