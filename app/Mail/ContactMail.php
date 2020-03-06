<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail_data;

    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail_data = $this->mail_data;
        $message   = $this->from('contact@globalstateitsolutions.com', 'Global State IT Solutions')
            ->replyTo($mail_data['email'])
            ->subject('E-mail From Contact Us')
            ->markdown('mails.contact_us');

        return $message;
    }
}
