<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $email_dest;
    private $object;
    private $content_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_dest, $object, $content_message)
    {
      $this->email_dest = $email_dest;
      $this->object = $object;
      $this->content_message = $content_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('mails.contact')->with('object', $this->object)
                                         ->with('content_message', $this->content_message);
    }
}
