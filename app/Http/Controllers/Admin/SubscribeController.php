<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubscribesDataTable;
use App\Http\Controllers\Controller;
use App\Mail\GeneralMail;
use App\Models\Course;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function index(SubscribesDataTable $dataTable)
    {
        return $dataTable->render('admin.subscribes.index');
    }
    
    public function mails()
    {
        $courses = Course::get();
        return view('admin.subscribes.mails', compact('courses'));
    }

    public function users(Request $request)
    {
        if($request->course_id == 0){
            return Subscribe::select(['id', 'email'])->where("is_all", 1)->get();
        }else if($request->course_id > 0){
            return Subscribe::select(['id', 'email'])->where("course_id", $request->course_id)->get();
        }
        return [];
    }
   

    public function send(Request $request)
    {
        $request->validate([
            "title"=> "required|string",
            "course_id"=> "required|numeric",
            "subscribes"=> "required|array",
            "subscribes.*"=> "required|email",
            "body"=> "required|string",
        ]);
        Mail::to($request->subscribes)->send(new GeneralMail($request->title, $request->body));
        return redirect()->route('admin.subscribes.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.send_msg')
        ]);
    }

}
