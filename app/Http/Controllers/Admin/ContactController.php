<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ContactsDataTable;
use App\Http\Controllers\Controller;
use App\Mail\GeneralMail;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function index(ContactsDataTable $dataTable)
    {
        if(auth()->user()->cannot('contact_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return $dataTable->render('admin.contacts.index');
    }
    
    public function show(Contact $contact)
    {
        if(auth()->user()->cannot('contact_show')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        return view('admin.contacts.show', compact('contact'));
    }
  

    public function send(Request $request, Contact $contact)
    {
        if(auth()->user()->cannot('contact_send_mail')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $request->validate([
            "title"=> "required|string",
            "body"=> "required|string",
        ]);
        try {
            Mail::to($contact->email)->send(new GeneralMail($request->title, $request->body));
            $contact->update(['has_communicated'=> 1]);

            return redirect()->route('admin.contacts.index')->with([
                "notify-type"=> "success",
                "notify-message"=> __('site.send_msg')
            ]);
        }catch(Throwable $th){
            return redirect()->route('admin.contacts.index')->with([
                "notify-type"=> "warning",
                "notify-message"=> __('site.fail_mail_msg')
            ]);
        }
       
    }


    public function destroy(Contact $contact)
    {
        if(auth()->user()->cannot('contact_delete')){
            return response()->json(['message'=> __('site.access denied')], 200);
        }
        $contact->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
