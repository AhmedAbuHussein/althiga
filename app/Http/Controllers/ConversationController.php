<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Conversation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        return view('conversation');
    }

    public function chat(Request $request)
    {
        $request->validate([
            "ticket"=> "required",
        ]);
        $ticket = $request->ticket;

        return redirect()->route('conversation', ['ticket'=> $ticket]);
    }

    public function show($ticket)
    {
        $item = Contact::whereTicket($ticket)->first();
        if(!$item){
            Toastr::error(__('invalid ticket or expired'), __('alert'));
            return redirect()->route('index');
        }
        $messages = $item->messages()->with('user')->get();
        return view('conversation', compact('item', 'messages'));
    }

    public function store(Request $request, $ticket)
    {
        $request->validate([
            "message"=> "required|string",
        ]);
        $data = $request->only('message');
        $data['contact_id'] = $request->ccui;
        $data['type'] = "user";
        Conversation::create($data);
        $messages = Conversation::where('contact_id', $request->uuid);
        return redirect()->route('conversation', ['ticket'=> $ticket]);
    }
}
