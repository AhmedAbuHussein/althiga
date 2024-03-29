<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
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
use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        $slider = Slider::_get();
        $categories = Category::where("show_in_menu", 1)->get();
        $about = About::first();
        $team = Team::get();
        $courses = Course::where('is_popular', 1)->get();
        $partners = Partner::_get();
        $subscribtes = Course::_get();
        return view('index', compact('slider', 'subscribtes', 'categories', 'about', 'team', 'courses', 'partners'));
    }

    public function about()
    {
        $setting = Setting::where('key', "number_panner")->pluck('value')->first();
        $num_panner = $setting ? Storage::url($setting) : asset('web/img/sub-pages-mid-background.jpg');

        $setting = Setting::where('key', "number_panner")->pluck('value')->first();
        $num_panner = $setting ? Storage::url($setting) : asset('web/img/sub-pages-mid-background.jpg');

        $about = About::first();
        $extra = Extra::_get();
        $team = Team::get();
        return view('about-us', compact('about', 'extra', 'team', 'num_panner'));
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
        $setting = Setting::where('key', "contact_panner")->pluck('value')->first();
        $panner = $setting ? Storage::url($setting) : asset('web/img/sub-pages-background.png');

        $ticket = $request->ticket;
        return view('contact-us', compact('ticket', 'panner'));
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
            $ticket = "TCK-".Str::random(6);
            if(Contact::where('ticket', $ticket)->count() > 0){
                while (true) {
                    $ticket = "TCK-".Str::random(6);
                    if(Contact::where('ticket', $ticket)->count() == 0){
                        break;
                    }
                }
            }  
            
            $data = $request->except("_token");
            $data['ticket'] = $ticket;
            $contact = Contact::create($data);
            try {
                Mail::to($request->email)->send(new ContactTicketMail($ticket));
                Mail::to("admin@althiga.com")->send(new ContactMail($request->title, $contact->id));
            } catch (\Throwable $th) {
                Toastr::warning($th->getMessage(), __('alert'));
            }
            Toastr::success(__('message_saved_success'), __('alert'));
        } catch (\Throwable $th) {
            Toastr::warning($th->getMessage(), __('alert'));
        }
        

        $setting = Setting::where('key', "contact_panner")->pluck('value')->first();
        $panner = $setting ? Storage::url($setting) : asset('web/img/sub-pages-background.png');
        return view('contact-us', compact('ticket', 'panner'));

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
