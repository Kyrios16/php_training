<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $postDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($postDetails)
    {
        $this->postDetails = $postDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Update Post Mail From Assignment")->view('emails.updatePost');
    }
}
