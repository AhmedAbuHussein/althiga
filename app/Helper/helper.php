<?php

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

if (!function_exists("uploadImage")) {

    function uploadImage(UploadedFile $file, $oldFileName = null, $prefix="", $resize = false, $width = 200, $height = 200, $folder = 'images')
    {
        if (!Storage::exists("$folder")) {
            Storage::makeDirectory("$folder");
        }
        if ($oldFileName && $oldFileName != "default.png") {
            try {
                Storage::delete(["$folder/$oldFileName", "$oldFileName"]);
            } catch (\Throwable $th) {
            }
        }
        $extension = $file->getClientOriginalExtension();
        $name = $prefix . '.' . Str::random() . '.' . ($extension ? $extension : 'png') ;
        if ($resize) {
            $directory = "$folder/$name";
            if (!Storage::exists("$folder")) {
                Storage::makeDirectory("$folder");
            }
            $image = Image::make($file)->resize($width, $height);
            $image->save(storage_path("app/public/$directory"));
        } else {
            if(! (Storage::putFileAs("$folder", $file, $name))){
                throw new Exception("Cant save this file", 400);
            }
        }
        return "$folder/$name";
    }
}




if (!function_exists('active')) {
    function active($route, $class = "active", $key = null, $params = null)
    {
        if ($key && $params) {
            return (request()->routeIs("$route") ||  request()->routeIs("$route.*")) && (request()->route($key) == $params) ? $class : '';
        } else {
            return (request()->routeIs("$route") ||  request()->routeIs("$route.*")) ? $class : '';
        }
    }
}


?>