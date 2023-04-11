<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RentInquiry extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //
        $this->details = $details;

    }

    /**
     * Build the message.
     *
     * @return
     */
    public function build()
    {
        return $this->markdown('emails.RentRobot')->subject('Rent Robot Inquiry')->with('details', $this->details);
    }
}
