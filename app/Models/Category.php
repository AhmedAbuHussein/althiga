<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasSlug, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title', 'text'];
    protected $appends = ['url'];

    public static function boot()
    {
        parent::boot();
        static::created(function(){
            Cache::forget("CATEGORIES");
            Cache::forget("GET.CATEGORY");
        });
        static::updated(function(){
            Cache::forget("CATEGORIES");
            Cache::forget("GET.CATEGORY");
        });
        static::deleted(function(){
            Cache::forget("CATEGORIES");
            Cache::forget("GET.CATEGORY");
            Cache::forget("COURSES");
        });
    }
    public static function _clear()
    {
        Cache::forget("CATEGORIES");
        Cache::forget("GET.CATEGORY");
    }

    public static function _get()
    {
        return Cache::remember('GET.CATEGORY', Carbon::now()->addDays(30), function(){
            return Category::with(['targets_training', 'targets_advisory'])->get();
        });
    }

    public function getUrlAttribute()
    {
        if($this->icon){
            return Storage::url($this->icon);
        }
        return asset('images/icon.png');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function targets()
    {
        return $this->morphMany(Target::class, 'targetable');
    }

    public function targets_training()
    {
        return $this->morphMany(Target::class, 'targetable')->where('type', 'training');
    }

    public function targets_advisory()
    {
        return $this->morphMany(Target::class, 'targetable')->where('type', 'advisory');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }


}
