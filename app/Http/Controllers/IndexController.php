<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;
use App\Models\Accreditation;
use Brian2694\Toastr\Facades\Toastr;

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
        return view('index', compact('slider', 'categories', 'about', 'team', 'courses', 'partners'));
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

    public function contact()
    {
        return view('contact-us');
    }

    public function contact_post(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
            "email"=> "required|email",
            "title"=> "required|string",
            "message"=> "required|string",
        ]);
        Contact::create($request->except("_token"));
        Toastr::success(__('app.message_saved_success'), __('app.alert'));
        return redirect()->route("contact");
    }
}
