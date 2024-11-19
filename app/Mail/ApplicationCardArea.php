<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationCardArea extends Mailable
{
    use Queueable, SerializesModels;
    public $AppData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($AppData)
    {
        $this->AppData = $AppData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.verify-email');

        return $this->subject('New Application For Credit Card.')
                ->markdown('emails.application-form-area-email');
    }
}
