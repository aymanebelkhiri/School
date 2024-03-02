<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class commandeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

        /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this
                ->from("belkhiriaymane5@gmail.com")
                ->subject('You Have a new Command !!')
                ->view('emails.email');
        
    }

}
