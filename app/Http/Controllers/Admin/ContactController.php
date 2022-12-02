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
        return $dataTable->render('admin.contacts.index');
    }
    
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }
  

    public function send(Request $request, Contact $contact)
    {
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
        $contact->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
