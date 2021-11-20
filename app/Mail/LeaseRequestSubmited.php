<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Leasing;

class LeaseRequestSubmited extends Mailable
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
        return $this->to("admin@sprawdzleasing.pl")
                    ->cc("owner@sprawdzleasing.pl")
                    ->subject($this->leasing->objective)
                    ->view('view.name');
    }
}
