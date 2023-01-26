<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['values'];

    public static function boot()
    {
        parent::boot();
        static::created(function(){
            Cache::forget("SETTING");
            Cache::forget("PANNERS");
        });
        static::updated(function(){
            Cache::forget("SETTING");
            Cache::forget("PANNERS");
        });
        static::deleted(function(){
            Cache::forget("SETTING");
            Cache::forget("PANNERS");
        });
    }

    public function website_logo()
    {
        $item = $this->select("value")->where('key', 'website_logo')->first();
        if ($item)
            return Storage::url($item->value);
        else
            return asset('web/img/Althiga_hand.png');
    }

    public function website_cover()
    {
        $item = $this->select("value")->where('key', 'website_cover')->first();
        if ($item)
            return Storage::url($item->value);
        else
            return asset('web/img/Althiga_hand.png');
    }

    public function website_wide_logo()
    {
        $item = $this->select("value")->where('key', 'website_wide_logo')->first();
        if ($item)
            return Storage::url($item->value);
        else
            return asset('web/img/Althiga_hand.png');
    }
    
    public function website_icon()
    {
        $item = $this->select("value")->where('key', 'website_icon')->first();
        if ($item)
            return Storage::url($item->value);
        else
            return asset('web/img/Althiga_hand.png');
    }

    public function main_color()
    {
        $item = $this->select("value")->where('key', 'main_color')->first();
        if ($item)
            return $item->value;
        else
            return "#2196f3";

    }
    public function hover_color()
    {
        $item = $this->select("value")->where('key', 'hover_color')->first();
        if ($item)
            return $item->value;
        else
            return "#2196f3";

    }
    public function phone()
    {
        $item = $this->select("value")->where('key', 'phone')->first();
        if ($item)
            return $item->value;
        else
            return "";
    }
}
