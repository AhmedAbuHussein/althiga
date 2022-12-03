<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AccreditationsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccreditationController extends Controller
{
    public function index(AccreditationsDataTable $dataTable)
    {
        return $dataTable->render('admin.accreditations.index');
    }
    
    public function show(Accreditation $accreditation)
    {
        return view('admin.accreditations.show', compact('accreditation'));
    }

    public function create()
    {
        return view('admin.accreditations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "type"=> "required|string|in:national,international",

            "text"=> "nullable|required_if:type,national|array",
            "text.en"=> "nullable|required_if:type,national|string",
            "text.ar"=> "nullable|required_if:type,national|string",

            "file_title"=> "nullable|array",
            "file_title.en"=> "nullable|string",
            "file_title.ar"=> "nullable|string",

            "image"=> "required|image",
            "file"=> "nullable|file",
        ]);
        $data = $request->except(['_token', "_method", 'image', 'file']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'accreditation-', true, 250, 250);
        }

        if($request->hasFile('file')){
            $data['file'] = uploadFile($request->file('file'), null, 'accreditation-');
        }

        Accreditation::create($data);
        return redirect()->route('admin.accreditations.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Accreditation $accreditation)
    {
        return view('admin.accreditations.edit', compact('accreditation'));
    }

    public function update(Request $request, Accreditation $accreditation)
    {
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "type"=> "required|string|in:national,international",

            "text"=> "nullable|required_if:type,national|array",
            "text.en"=> "nullable|required_if:type,national|string",
            "text.ar"=> "nullable|required_if:type,national|string",

            "file_title"=> "nullable|array",
            "file_title.en"=> "nullable|string",
            "file_title.ar"=> "nullable|string",

            "image"=> "nullable|image",
            "file"=> "nullable|file",
        ]);
        $data = $request->except(['_token', "_method", 'image', 'file']);

        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $accreditation->image, 'accreditation-', true, 250, 250);
        }

        if($request->hasFile('file')){
            $data['file'] = uploadFile($request->file('file'), $accreditation->file, 'accreditation-');
        }

        $accreditation->update($data);
        return redirect()->route('admin.accreditations.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Accreditation $accreditation)
    {
        $img = $accreditation->image;
        $file = $accreditation->file;
        Storage::delete([$img, $file]);
        $accreditation->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
