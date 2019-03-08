<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $a;

    //public function __construct(/*$name, $email, $msg*/)
    //{
       //$this->name=$name;
       //$this->email=$email;
       //$this->msg=$msg;
    //}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function setA($a , $email, $name)
    {
        $this->a=$a;
        $this->name=$name;
        $this->email=$email;
    }
    public function build()
    {
        return $this->view('emails.messages.created');
    }
}
