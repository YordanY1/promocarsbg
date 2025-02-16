<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), 'PromoCars BG')
                    ->replyTo($this->data['email'], $this->data['name']) 
                    ->subject('Ново запитване от контактната форма')
                    ->view('emails.contact-mail')
                    ->with('data', $this->data);
    }
}
