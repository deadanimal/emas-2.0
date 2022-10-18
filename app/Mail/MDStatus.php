<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MDStatus extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $activity;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $activity = null)
    {
        $this->data = $data;
        $this->activity = $activity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('EPU@testing.info')->subject('MPB - Information Status Update')->view('dynamic_email_MPB')->with('data', $this->data);
    }
}
