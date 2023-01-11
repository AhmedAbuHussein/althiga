<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['url'];

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
            Cache::forget('GALLARY');
        });
        static::updated(function(){
            Cache::forget('GALLARY');
        });
        static::deleted(function(){
            Cache::forget('GALLARY');
        });
    }
    public static function _get()
    {
        return Cache::remember('GALLARY', Carbon::now()->addDays(30), function(){
            return Gallery::get();
        });
    }
    
}
