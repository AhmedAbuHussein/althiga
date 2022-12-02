<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PartnersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(PartnersDataTable $dataTable)
    {
        return $dataTable->render('admin.partners.index');
    }
    
    public function show(Partner $partner)
    {
        return view('admin.partners.show', compact('partner'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
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
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
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
        $partner->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
