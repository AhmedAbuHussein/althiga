<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render('admin.categories.index');
    }
    
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function create()
    {
        return view('admin.categories.create');
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
        $data = $request->except(['_token', "_method", "image"]);
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
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
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
        $data = $request->except(['_token', "_method", "image"]);
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
        $category->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
