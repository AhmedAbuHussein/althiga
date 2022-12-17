<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GalleriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(GalleriesDataTable $dataTable)
    {
        if(auth()->user()->cannot('gallery_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.galleries.index');
    }
    
    public function show(Gallery $gallery)
    {
        if(auth()->user()->cannot('gallery_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.galleries.show', compact('gallery'));
    }

    public function create()
    {
        if(auth()->user()->cannot('gallery_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('gallery_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "image"=> "required|image",
        ]);
        $data = [];
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'gallery-', true, 2048, 1024);
        }
        Gallery::create($data);
        return redirect()->route('admin.galleries.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Gallery $gallery)
    {
        if(auth()->user()->cannot('gallery_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        if(auth()->user()->cannot('gallery_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "image"=> "required|image",
        ]);
        $data = [];
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $gallery->image, 'gallery-', true,  2048, 1024);
        }
        $gallery->update($data);
        return redirect()->route('admin.galleries.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Gallery $gallery)
    {
        if(auth()->user()->cannot('gallery_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $gallery->image;
        Storage::delete($img);
        $gallery->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
