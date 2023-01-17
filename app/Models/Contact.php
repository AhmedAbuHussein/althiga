<?php

namespace App\Models;

use App\Mail\ContactTicketMail;
use Illuminate\Support\Str;
use App\Notifications\GeneralNotify;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();
        static::created(function($item){
            $users = User::get();
            $title = [
                "en"=> "New Contact Request",
                "ar"=> "طلب تواصل جديد"
            ];
            $message = [
                "en"=> "<strong>Please</strong> review the communication requests. A new request has been sent",
                "ar"=> "<strong>يرجي</strong> مراجعة طلبات التواصل تم استقبال طلب تواصل جديد"
            ];
            foreach ($users as $user) {
                $user->notify(new GeneralNotify($title, $message, route('admin.contacts.index')));
            }

            $ticket = $item->ticket;
            try {
                Mail::to($item->email)->send(new ContactTicketMail($ticket));
            } catch (\Throwable $th) {}
        });
    }

    public function messages()
    {
        return $this->hasMany(Conversation::class, 'contact_id');
    }
}
