<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Requirement extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title'];

    public function childs()
    {
        return $this->hasMany(Requirement::class, 'parent_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
