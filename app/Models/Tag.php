<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory,  HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title'];

    public function courses()
    {
        return $this->belongsToMany(Course::class ,'taggable', 'tag_id', 'course_id');
    }
}
