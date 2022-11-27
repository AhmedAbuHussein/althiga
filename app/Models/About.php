<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    protected $appends = ['url'];
    public $translatable = ['title', 'description', 'details'];

    public function getUrlAttribute()
    {
        if($this->image){
            return Storage::url($this->image);
        }
        return asset('images/default.png');
    }

    public function targets()
    {
        return $this->morphMany(Target::class, 'targetable');
    }
}
