<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPasswordResetMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $notifiable;
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notifiable, $token)
    {
        $this->notifiable = $notifiable;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.front.password-reset', ['notifiable' => $this->notifiable, 'token',  $this->token])
        ->to($this->notifiable->email)
        ->subject('Reset Your Password');
    }
}
