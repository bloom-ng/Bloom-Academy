<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserDataNotification extends Notification
{
    use Queueable;
    protected $payment;

    /**
     * Create a new notification instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Registration confirmed for Bloom Academy Africa')
                    ->greeting('Dear ' . $this->user->name . ',')
                    ->line('Thank you for registering with Bloom Academy Africa!')
                    ->line('We are excited to help you dream big and reach your biggest career goals through courses tailored for you!')
                    ->line('Regards,')
                    ->line('Adaeze from Bloom Academy Africa')
                    ->line('Socials: [Instagram](https://www.instagram.com/bloomacademyafrica) - [Twitter](https://twitter.com/bloomacademy_)- [TikTok](https://www.tiktok.com/@bloomacademyafrica) - [LinkedIn](https://www.linkedin.com/company/bloomacademyafrica)')
                    ->action('Bloom Academy Africa', url('/'));
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
