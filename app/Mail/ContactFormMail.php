<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

        Log::info('ContactFormMail instance created.', [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info('Building the contact form email.');

        return $this->view('emails.contact')
            ->subject('Contact Form Submission')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'userMessage' => $this->message,
            ]);
    }
}
