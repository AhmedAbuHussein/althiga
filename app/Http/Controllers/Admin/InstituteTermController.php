<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TermsDataTable;
use App\Http\Controllers\Controller;
use App\Models\InstituteTerm;
use Illuminate\Http\Request;

class InstituteTermController extends Controller
{
    public function __construct() {
        $this->middleware("permission:institute_terms_show")->only(['index', 'show']);
        $this->middleware("permission:institute_terms_create")->only(['create', 'store']);
        $this->middleware("permission:institute_terms_edit")->only(['edit', 'update']);
        $this->middleware("permission:institute_terms_delete")->only('destroy');
    }

    public function index(TermsDataTable $dataTable)
    {
        return $dataTable->render('admin.institute_terms.index');
    }
 

    public function create()
    {
        return view('admin.institute_terms.create');
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
        InstituteTerm::create($data);
        return redirect()->route('admin.terms.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }

    public function edit(InstituteTerm $term)
    {
        return view('admin.institute_terms.edit', compact('term'));
    }

    public function update(Request $request, InstituteTerm $term)
    {
        $data = $request->validate([
            "title"=> "required|array",
            "title.en"=> "required|string",
            "title.ar"=> "required|string",
            "details"=> "required|array",
            "details.en"=> "required|string",
            "details.ar"=> "required|string",
        ]);
        $term->update($data);
        return redirect()->route('admin.terms.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.updated_msg')
        ]);
    }


    public function destroy(InstituteTerm $term)
    {
        $term->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
