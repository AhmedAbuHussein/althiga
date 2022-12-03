<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Accreditation extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    protected $appends = ['url', 'fileUrl'];
    public $translatable = ['title', 'text','file_title'];

    public function getUrlAttribute()
    {
        if($this->image){
            return Storage::url($this->image);
        }
        return asset('images/default.png');
    }

    public function getFileUrlAttribute()
    {
        if($this->file){
            return Storage::url($this->file);
        }
        return asset('images/default.png');
    }
}
