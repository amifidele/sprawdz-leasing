<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeaseComparisonSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
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
        return $this->to("admin@sprawdzleasing.pl")
                    ->cc("owner@sprawdzleasing.pl")
                    ->subject("New Comparison Made")
                    ->from('admin@sprawdzleasing.com')
                    ->view('emails.admin');
    }
}
