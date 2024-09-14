<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PrivaciesDataTable;
use App\Http\Controllers\Controller;
use App\Models\CourseTerm;
use Illuminate\Http\Request;

class CourseTermController extends Controller
{
    public function __construct() {
        $this->middleware("permission:course_terms_show")->only(['index', 'show']);
        $this->middleware("permission:course_terms_create")->only(['create', 'store']);
        $this->middleware("permission:course_terms_edit")->only(['edit', 'update']);
        $this->middleware("permission:course_terms_delete")->only('destroy');
    }

    public function index(PrivaciesDataTable $dataTable)
    {
        return $dataTable->render('admin.course_terms.index');
    }
 

    public function create()
    {
        return view('admin.course_terms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "details"=> "required|array",
            "details.en"=> "required|string",
            "details.ar"=> "required|string",
        ]);
        CourseTerm::create($data);
        return redirect()->route('admin.privacies.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(CourseTerm $privacy)
    {
        return view('admin.course_terms.edit', compact('privacy'));
    }

    public function update(Request $request, CourseTerm $privacy)
    {
        $data = $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "details"=> "required|array",
            "details.en"=> "required|string",
            "details.ar"=> "required|string",
        ]);
        $privacy->update($data);
        return redirect()->route('admin.privacies.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(CourseTerm $privacy)
    {
        $privacy->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
