<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Mail\SendVerifyEmailMailable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmailNotification extends VerifyEmail 
implements ShouldQueue, ShouldBeUnique
{
    use Queueable;

    public $uniqueFor = 3600;

    private $notifiable;
    private $verificationUrl;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($notifiable)
    {
        $this->verificationUrl = $this->verificationUrl($notifiable);
    } 
    
    public function uniqueId()
    {
        return $this->notifiable->id;
    }



    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // $verificationUrl = $this->verificationUrl($notifiable);
       return new SendVerifyEmailMailable($notifiable, $this->verificationUrl);
        
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
