<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $title;
    public $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $id)
    {
        $this->title = $title;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = route('admin.contacts.show', [$this->id]);
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                ->subject("Contact Message")
                ->markdown('admin.mail.index', [
                    'body'=> "A new communication request entitled <strong>{$this->title}</strong> has been received. You can follow the process by clicking on the following <a href=\"{$url}\">link</a>", 
                    'title'=> "Contact Ticket"
            ]);
    }
}
