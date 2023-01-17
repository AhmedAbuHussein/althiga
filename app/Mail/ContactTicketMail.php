<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactTicketMail extends Mailable
{
    use Queueable, SerializesModels;
    public $ticket;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = route('conversation', ['ticket'=> $this->ticket]);
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                ->subject("Contact Ticket")
                ->markdown('admin.mail.index', ['body'=> "Starting new Contact with Ticket ID: <br><strong>{$this->ticket}</strong> <br> <br> you can start conversation with althiga admin by following this <a href=\"{$url}\">link</a>", 'title'=> "Contact Ticket"]);
    }
}
