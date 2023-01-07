<?php

namespace App\Models;

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
        });
        static::updated(function(){
            Cache::forget("CATEGORIES");
        });
        static::deleted(function(){
            Cache::forget("CATEGORIES");
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

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }
}
