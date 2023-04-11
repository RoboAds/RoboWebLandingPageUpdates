<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OTPVerifiedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public function __construct($details)
    {
        //
        $this->details = $details;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.OTPverifiedmail')->subject('Hurray!!! You are successfully registered.')->with('details', $this->details);;
    }
}
