<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasSlug, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title', 'text'];

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
