<?php

namespace Kalam714\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg,$name)
    {
        $this->msg=$msg;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['msg' =>$this->msg,'name'=>$this->name]);
    }
}
