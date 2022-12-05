<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Extra extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = ['id'];
    public $translatable = ['title', 'text'];
    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        if($this->icon){
            return Storage::url($this->icon);
        }
        return asset('images/icon.png');
    }

}
