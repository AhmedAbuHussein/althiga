<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PartnersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(PartnersDataTable $dataTable)
    {
        if(auth()->user()->cannot('partners_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.partners.index');
    }
    
    public function show(Partner $partner)
    {
        if(auth()->user()->cannot('partners_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.partners.show', compact('partner'));
    }

    public function create()
    {
        if(auth()->user()->cannot('partners_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('partners_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "link"=> "nullable|url",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'partner-', true, 120, 120);
        }
        Partner::create($data);
        return redirect()->route('admin.partners.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Partner $partner)
    {
        if(auth()->user()->cannot('partners_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        if(auth()->user()->cannot('partners_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "link"=> "nullable|url",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $partner->image, 'partner-', true,  120, 120);
        }
        $partner->update($data);
        return redirect()->route('admin.partners.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Partner $partner)
    {
        if(auth()->user()->cannot('partners_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $partner->image;
        Storage::delete($img);
        $partner->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
