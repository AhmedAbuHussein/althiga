<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, HasTranslations, HasSlug;
    protected $guarded = ['id'];
    protected $casts = ['days' => "array"];
    protected $appends = ['url', 'fileUrl'];
    public $translatable = [
        'title', 
        'title2', 
        'details',
        'details2',
        "price_role",
        "certification",
        "group_price_role",
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    
    public function getUrlAttribute()
    {
        if($this->image){
            return Storage::url($this->image);
        }
        return asset('web/img/Althiga_hand.png');
    }

    public function getFileUrlAttribute()
    {
        if($this->register_form_file){
            return Storage::url($this->register_form_file);
        }
        return asset('web/img/Althiga_hand.png');
    }

    public function targets()
    {
        return $this->morphMany(Target::class, 'targetable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function contents()
    {
        return $this->hasMany(Content::class, 'course_id');
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class, 'course_id');
    }

    public function subscribes()
    {
        return $this->hasMany(Subscribe::class, 'course_id');
    }
}
