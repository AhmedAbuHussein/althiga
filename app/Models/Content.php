<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Content extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function items()
    {
        return $this->hasMany(Content::class, 'parent_id');
    }

    public function content()
    {
        return $this->belongsTo(Content::class, 'parent_id');
    }

}
