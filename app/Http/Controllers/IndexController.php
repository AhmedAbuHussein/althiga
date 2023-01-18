<?php

namespace App\Http\Controllers;

use App\Mail\ContactTicketMail;
use App\Models\Team;
use App\Models\Tour;
use App\Models\About;
use App\Models\Extra;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Category;
use App\Models\Subscribe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Accreditation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $slider = Slider::_get();
        $categories = Category::where("show_in_menu", 1)->get();
        $about = About::first();
        $team = Team::inRandomOrder()->limit(3)->get();
        $courses = Course::where('is_popular', 1)->get();
        $partners = Partner::_get();
        $subscribtes = Course::_get();
        return view('index', compact('slider', 'subscribtes', 'categories', 'about', 'team', 'courses', 'partners'));
    }

    public function about()
    {
        $about = About::first();
        $extra = Extra::_get();
        $team = Team::inRandomOrder()->limit(3)->get();
        return view('about-us', compact('about', 'extra', 'team'));
    }

    public function tours()
    {
        $items = Tour::_get();
        return view('tours', compact('items'));
    }

    public function accreditations()
    {
        $items = Accreditation::_get();
        return view('accreditations', compact('items'));
    }

    public function partners()
    {
        $items = Partner::_get();
        return view('partners', compact('items'));
    }

    public function gallery()
    {
        $items = Gallery::_get();
        return view('gallary', compact('items'));
    }

    public function contact(Request $request)
    {
        $ticket = $request->ticket;
        return view('contact-us', compact('ticket'));
    }

    public function contact_post(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|email",
            "title"=> "required|string",
            "message"=> "required|string",
            "g-recaptcha-response"=> "required|string",
        ]);
        try {
            $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
                "secret"=> env("RECAPTCHA_SECRET", "6Le58wQkAAAAALIprKKUUIilXnF0LcBoBY4f8tLh"),
                "response"=> $request->get('g-recaptcha-response'),
                "remoteip"=> request()->ip(),
            ]);
            if(!$response['success']){
                $message = $response['error-codes'][0];
                Toastr::error($message , __('alert'));
                return redirect()->route('contact');
            }    
            $ticket = Str::uuid();
            $data = $request->except("_token");
            $data['ticket'] = $ticket;
            $contact = Contact::create($data);
            try {
                Mail::to($request->email)->send(new ContactTicketMail($ticket));
            } catch (\Throwable $th) {
                Toastr::warning($th->getMessage(), __('alert'));
            }
            Toastr::success(__('message_saved_success'), __('alert'));
        } catch (\Throwable $th) {
            Toastr::warning($th->getMessage(), __('alert'));
        }
        

        return view('contact-us', compact('ticket')); //redirect()->route("contact", ['ticket'=> $ticket]);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            "email"=> "required|email",
            "course_id"=> "required|numeric",
        ]);
        $data = $request->only('email');
        if($request->course_id == 0){
            $data['is_all'] = 1;
            $data['course_id'] = NULL;
        }else{
            $data['is_all'] = 0;
            $data['course_id'] = $request->course_id;
        }
        Subscribe::updateOrcreate(['email'=> $request->email],$data);
        Toastr::success(__('message_saved_success'), __('alert'));
        return redirect()->route("index");
    }
}
