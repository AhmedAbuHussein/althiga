<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ToursDataTable;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(ToursDataTable $dataTable)
    {
        return $dataTable->render('admin.tours.index');
    }
    
    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }

    public function create()
    {
        return view('admin.tours.create');
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
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'tour-', true, 2048, 1024);
        }
        Tour::create($data);
        return redirect()->route('admin.tours.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "text"=> "required|array",
            "text.en"=> "required|string",
            "text.ar"=> "required|string",
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
        $tour->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
