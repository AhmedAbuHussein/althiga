<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::firstOrCreate([]);
        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            "facebook"          => "required|string",
            "twitter"           => "required|string",
            "instagram"         => "required|string",
            "phone"             => "required|string",
            "email"             => "required|email",
            "register_phone"    => "required|string",
            "lat"               => "nullable|numeric",
            "lng"               => "nullable|numeric",
            "values"            => "required|array",
            "values.en"         => "required|string",
            "values.ar"         => "required|string",
        ]);

        $data = $request->except(['_token', '_method']);
        $setting->update($data);
        return redirect()->route('admin.setting.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.saved_msg')
        ]);
    }
}
