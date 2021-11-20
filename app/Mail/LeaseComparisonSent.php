<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Leasing;

class LeaseComparisonSent extends Mailable
{
    use Queueable, SerializesModels;

    public $leasing;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Leasing $leasing)
    {
        $this->leasing = $leasing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->leasing->objective;
        return $this->to($this->leasing->email)
                    ->subject("Comparison received")
                    ->from('admin@sprawdzleasing.com')
                    ->view('emails.admin');
    }
}
