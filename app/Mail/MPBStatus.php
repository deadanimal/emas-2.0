<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MPBStatus extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $miles;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $miles = null)
    {
        $this->data = $data;
        $this->miles = $miles;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adwa@testing.info')->subject('MPB - Information Status Update')->view('dynamic_email_MPB')->with('data', $this->data);
    }
}
