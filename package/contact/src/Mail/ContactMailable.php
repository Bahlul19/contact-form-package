<?php

namespace Bahlul\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
            'subject'=>$this->subject,
            'name' => $this->name
            ]);
    }
}
