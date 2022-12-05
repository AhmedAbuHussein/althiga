<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Extra;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::firstOrCreate([]);
        $items = Extra::get();
        return view('admin.about.index', compact('about', 'items'));
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            "title"      => "required|array",
            "title.ar"   => "required|string",
            "title.en"   => "required|string",

            "description"      => "required|array",
            "description.ar"   => "required|string",
            "description.en"   => "required|string",

            "details"      => "required|array",
            "details.ar"   => "required|string",
            "details.en"   => "required|string",

            "image"=> "nullable|image",
        ]);

        $data = $request->except(['_token', '_method', 'image']);

        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $about->image, 'about-', true, 400, 400);
        }
        $about->update($data);
        return redirect()->route('admin.about.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }
}
