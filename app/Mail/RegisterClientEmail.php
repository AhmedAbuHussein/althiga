<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterClientEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $phone;
    public $nationalId;
    public $groupNumber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $nationalId=null, $groupNumber=null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->nationalId = $nationalId;
        $this->groupNumber = $groupNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Aramco Registration Form Confirmation';
        return $this->subject($subject)
        ->markdown('register-client-email',[
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            "nationalId" => $this->nationalId,
            "groupNumber" => $this->groupNumber,
        ]);
    }
}
