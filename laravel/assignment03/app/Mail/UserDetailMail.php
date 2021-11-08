<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserDetailMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userDetails)
    {
        $this->userDetails = $userDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Create User Account Mail From Assignment")->view('emails.createUser');
    }
}
