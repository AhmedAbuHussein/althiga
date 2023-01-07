<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(CategoriesDataTable $dataTable)
    {
        if(auth()->user()->cannot('categories_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.categories.index');
    }
    
    public function show(Category $category)
    {
        if(auth()->user()->cannot('categories_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.categories.show', compact('category'));
    }

    public function create()
    {
        if(auth()->user()->cannot('categories_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        if(auth()->user()->cannot('categories_create')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "text"=> "required|array",
            "text.en"=> "required|string",
            "text.ar"=> "required|string",
            "show_in_menu"=> "sometimes|boolean",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", "image"]);
        if(!$request->has('show_in_menu')){
            $data['show_in_menu'] = 0;
        }
        if($request->hasFile('image')){
            $data['icon'] = uploadImage($request->file('image'), null, 'category-', true, 100, 100);
        }
        Category::create($data);
        return redirect()->route('admin.categories.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(Category $category)
    {
        if(auth()->user()->cannot('categories_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        if(auth()->user()->cannot('categories_edit')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "text"=> "required|array",
            "text.en"=> "required|string",
            "text.ar"=> "required|string",
            "show_in_menu"=> "sometimes|boolean",
            "image"=> "nullable|image",
        ]);
        $data = $request->except(['_token', "_method", "image"]);
        if(!$request->has('show_in_menu')){
            $data['show_in_menu'] = 0;
        }
        if($request->hasFile('image')){
            $data['icon'] = uploadImage($request->file('image'), $category->icon, 'category-', true, 100, 100);
        }
        $category->update($data);
        return redirect()->route('admin.categories.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(Category $category)
    {
        if(auth()->user()->cannot('categories_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $img = $category->icon;
        Storage::delete($img);
        $category->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
