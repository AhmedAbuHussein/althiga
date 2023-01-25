<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        if(auth()->user()->cannot('setting')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        $ar_fonts = [
            "Cairo",
            "Lateef",
            "Droid Arabic Naskh",
            "Droid Arabic Kufi",
            "Amiri",
        ];
        $en_fonts = [
            "Nunito",
            "Arial",
            "Helvetica",
            "Verdana",
            "Calibri",
            "Noto",
            "Lucida Sans",
            "Gill Sans",
            "Century Gothic",
            "Candara",
            "Futara",
            "Franklin Gothic Medium",
            "Trebuchet MS",
            "Geneva",
            "Segoe UI",
            "Optima",
            "Avanta Garde",
            "Times New Roman",
            "Big Caslon",
            "Bodoni MT",
            "Book Antiqua",
            "Bookman",
            "New Century Schoolbook",
            "Calisto MT",
            "Cambria",
            "Didot",
            "Garamond",
            "Georgia",
            "Goudy Old Style",
            "Hoefler Text",
            "Lucida Bright",
            "Palatino",
            "Consolas",
            "Courier",
            "Lucida Console",
            "Lucidatypewriter",
            "Comic Sans",
            "Comic Sans MS",
            "Apple Chancery",
            "Impact",
            "Brushstroke",
            "Luminari",
            "Blippo",
            "Trattatello",
            "Bookman",
            "Bradley Hand",
            "Browallia New",
        ];
        return view('admin.setting.index', compact('en_fonts', 'ar_fonts'));
    }

    public function update(Request $request, Setting $setting)
    {
        if(auth()->user()->cannot('setting')){
            return redirect()->route('admin.home')->with([
                "notify-type"=> "error",
                "notify-message"=> __('site.access denied')
            ]);
        }
        foreach($request->settings as $key => $value ){
            if(!in_array($key,[
                'website_logo',
                'website_wide_logo',
                'website_icon',
                'website_cover',
                "number_panner",
                "course_panner",
                "contact_panner",
            ]))
                \App\Models\Setting::updateOrCreate(['key'=> $key],['value'=>$value]);
        }

        if($request->hasFile('settings.website_logo')){
            $old = optional(\App\Models\Setting::where('key','website_logo')->first())->value;
            $file = uploadImage($request->file('settings.website_logo'),  $old, "website_logo-", true, 200, 200);      
            \App\Models\Setting::updateOrCreate(['key'=> 'website_logo'],['value'=>$file]);
        }
        if($request->hasFile('settings.website_wide_logo')){
            $old = optional(\App\Models\Setting::where('key','website_wide_logo')->first())->value;
            $file = uploadImage($request->file('settings.website_wide_logo'),  $old, "website_wide_logo-", true, 500, 200);      
            \App\Models\Setting::updateOrCreate(['key'=> 'website_wide_logo'], ['value'=>$file]);
        }
        if($request->hasFile('settings.website_icon')){
            $old = optional(\App\Models\Setting::where('key','website_icon')->first())->value;
            $file = uploadImage($request->file('settings.website_icon'),  $old, "website_icon-", true, 50, 50);   
            \App\Models\Setting::updateOrCreate(['key'=> 'website_icon'], ['value'=>$file]);
        }
        if($request->hasFile('settings.website_cover')){
            $old = optional(\App\Models\Setting::where('key','website_cover')->first())->value;
            $file = uploadImage($request->file('settings.website_cover'),  $old, "website_cover-", true, 800, 500);   
            \App\Models\Setting::updateOrCreate(['key'=> 'website_cover'], ['value'=>$file]);
        }

        if($request->hasFile('settings.contact_panner')){
            $old = optional(\App\Models\Setting::where('key','contact_panner')->first())->value;
            $file = uploadImage($request->file('settings.contact_panner'),  $old, "contact-panner-");   
            \App\Models\Setting::updateOrCreate(['key'=> 'contact_panner'], ['value'=>$file]);
        }

        if($request->hasFile('settings.number_panner')){
            $old = optional(\App\Models\Setting::where('key','number_panner')->first())->value;
            $file = uploadImage($request->file('settings.number_panner'),  $old, "number-panner-");   
            \App\Models\Setting::updateOrCreate(['key'=> 'number_panner'], ['value'=>$file]);
        }

        if($request->hasFile('settings.course_panner')){
            $old = optional(\App\Models\Setting::where('key','course_panner')->first())->value;
            $file = uploadImage($request->file('settings.course_panner'),  $old, "course-panner-");   
            \App\Models\Setting::updateOrCreate(['key'=> 'course_panner'], ['value'=>$file]);
        }
        
        return redirect()->route('admin.setting.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }
}
