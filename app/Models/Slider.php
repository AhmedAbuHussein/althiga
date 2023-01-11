<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    protected $appends = ['url'];
    public $translatable = ['title', 'text'];

    public function getUrlAttribute()
    {
        if($this->image){
            return Storage::url($this->image);
        }
        return asset('images/default.png');
    }

    public static function boot()
    {
        parent::boot();
        static::created(function(){
            Cache::forget('SLIDER');
        });
        static::updated(function(){
            Cache::forget('SLIDER');
        });
        static::deleted(function(){
            Cache::forget('SLIDER');
        });
    }
    public static function _get()
    {
        return Cache::remember('SLIDER', Carbon::now()->addDays(30), function(){
            return Slider::get();
        });
    }
}
