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
        if(auth()->user()->cannot('subscribes_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.subscribes.index');
    }
    
    public function mails()
    {
        if(auth()->user()->cannot('subscribes_send_mails')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
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
        if(auth()->user()->cannot('subscribes_send_mails')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
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

    
    public function destroy(Subscribe $subscribe)
    {
        if(auth()->user()->cannot('subscribes_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $subscribe->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
