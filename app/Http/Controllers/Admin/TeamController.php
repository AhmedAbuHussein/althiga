<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TeamsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(TeamsDataTable $dataTable)
    {
        return $dataTable->render('admin.team.index');
    }
    
    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|array",
            "name.en"=> "required|string",
            "name.ar"=> "required|string",

            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",

            "bio"=> "required|array",
            "bio.en"=> "required|string",
            "bio.ar"=> "required|string",

            "facebook"=> "nullable|url",
            "twitter"=> "nullable|url",
            "instagram"=> "nullable|url",
            "youtube"=> "nullable|url",

            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), null, 'team-', true, 350, 280);
        }
        Team::create($data);
        return redirect()->route('admin.team.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            "name"=> "required|array",
            "name.en"=> "required|string",
            "name.ar"=> "required|string",

            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",

            "bio"=> "required|array",
            "bio.en"=> "required|string",
            "bio.ar"=> "required|string",

            "facebook"=> "nullable|url",
            "twitter"=> "nullable|url",
            "instagram"=> "nullable|url",
            "youtube"=> "nullable|url",

            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", 'image']);
        if($request->hasFile('image')){
            $data['image'] = uploadImage($request->file('image'), $team->image, 'team-', true,  350, 280);
        }
        $team->update($data);
        return redirect()->route('admin.team.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Team $team)
    {
        $img = $team->image;
        Storage::delete($img);
        $team->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
