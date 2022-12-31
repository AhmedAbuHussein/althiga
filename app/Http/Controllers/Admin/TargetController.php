<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TargetDataTable;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Target;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TargetController extends Controller
{
    public function index(TargetDataTable $dataTable, $type, $id)
    {
        if(auth()->user()->cannot('targets_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $route = $this->getRoute($type);
        return $dataTable->with(['type'=> $type, 'id'=> $id])->render('admin.targets.index', ['type'=> $type, 'id'=> $id, 'route'=> $route]);
    }
    

    public function create($type, $id)
    {
        if(auth()->user()->cannot('targets_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $route = $this->getRoute($type);
        return view('admin.targets.create', compact('type', 'id', 'route'));
    }

    public function store(Request $request, $type, $id)
    {
        if(auth()->user()->cannot('targets_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "type" => "sometimes|string",
        ]);
       
        $data = $request->except(['_token', "_method"]);
        $data['title'] = [
            'en'=> detectURL($request->title['en']),
            'ar'=> detectURL($request->title['ar']),
        ];
        if(!$request->has('type')){
            $data['type'] = $type;
        }
        $data['targetable_type'] = $this->getClass($type);
        $data['targetable_id'] = $id;
        Target::create($data);
        return redirect()->route('admin.targets.index', [$type, $id])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit($type, $id, Target $target)
    {
        if(auth()->user()->cannot('targets_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $route = $this->getRoute($type);
        return view('admin.targets.edit', compact('target', 'type', 'id', 'route'));
    }

    public function update(Request $request,$type, $id, Target $target)
    {
        if(auth()->user()->cannot('targets_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "type" => "sometimes|string",
        ]);
        $data = $request->except(['_token', "_method"]);
        $data['title'] = [
            'en'=> detectURL($request->title['en']),
            'ar'=> detectURL($request->title['ar']),
        ];
        if(!$request->has('type')){
            $data['type'] = $type;
        }
        $target->update($data);
        return redirect()->route('admin.targets.index', ['type'=> $type, 'id'=> $id])->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy($type, $id, Target $target)
    {
        if(auth()->user()->cannot('targets_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $target->image;
        Storage::delete($img);
        $target->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }

    public function getRoute($type)
    {
        return [
            "about"=> route('admin.about.index'),
            "categories"=> route('admin.categories.index'),
            "courses"=> route('admin.courses.index'),
        ][$type];
    }

    public function getClass($type)
    {
        return [
            "about"=> About::class,
            "categories"=> Category::class,
            "courses"=> Course::class,
        ][$type];
    }
}
