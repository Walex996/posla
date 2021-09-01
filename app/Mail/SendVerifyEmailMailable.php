<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendVerifyEmailMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $notifiable;
    public $verification_url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notifiable, $verification_url)
    {
        $this->notifiable = $notifiable;
        $this->verification_url = $verification_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->view('emails.front.verify-email', [
           'notifiable' => $this->notifiable,
           'verification_url' => $this->verification_url
       ])
        ->to($this->notifiable->email)
        ->subject('Verify Your Email');
    }
}
