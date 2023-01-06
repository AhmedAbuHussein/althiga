<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ToursDataTable;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index(ToursDataTable $dataTable)
    {
        if(auth()->user()->cannot('tour_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.tours.index');
    }
    
    public function show(Tour $tour)
    {
        if(auth()->user()->cannot('tour_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.tours.show', compact('tour'));
    }

    public function create()
    {
        if(auth()->user()->cannot('tour_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.tours.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('tour_create')){
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
            "image"=> "required|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'tour-', true, 2048, 1024);
        }
        Tour::create($data);
        return redirect()->route('admin.tours.create')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Tour $tour)
    {
        if(auth()->user()->cannot('tour_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.tours.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        if(auth()->user()->cannot('tour_edit')){
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
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $tour->image, 'tour-', true,  2048, 1024);
        }
        $tour->update($data);
        return redirect()->route('admin.tours.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Tour $tour)
    {
        if(auth()->user()->cannot('tour_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $tour->image;
        Storage::delete($img);
        $tour->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
