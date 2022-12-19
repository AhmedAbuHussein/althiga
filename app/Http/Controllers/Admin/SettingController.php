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
        $settings = Setting::firstOrCreate([]);
        return view('admin.setting.index', compact('settings'));
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
            if(!in_array($key,['website_logo','website_wide_logo','website_icon','website_cover']))
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
        
        return redirect()->route('admin.setting.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }
}
