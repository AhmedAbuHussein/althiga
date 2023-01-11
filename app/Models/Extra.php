<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Extra extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title', 'text'];
    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        if($this->icon){
            return Storage::url($this->icon);
        }
        return asset('images/icon.png');
    }

    public static function boot()
    {
        parent::boot();
        static::created(function(){
            Cache::forget('EXTRA');
        });
        static::updated(function(){
            Cache::forget('EXTRA');
        });
        static::deleted(function(){
            Cache::forget('EXTRA');
        });
    }
    public static function _get()
    {
        return Cache::remember('EXTRA', Carbon::now()->addDays(30), function(){
            return Extra::get();
        });
    }

}
