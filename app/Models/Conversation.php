<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
