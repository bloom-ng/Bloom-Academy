<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MananagerConfirmPaymentNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($payment)
    {
        $this->payment = $payment;
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
                    ->greeting('Dear Community Manager')
                    ->line("User Details: ")
                    ->line('Name:  '. $this->payment->name)
                    ->line('Email:  '. $this->payment->email)
                    ->line('Phone:  '. $this->payment->phone)
                    ->line('Course: ' . $this->payment->course)
                    ->line('payment reference is: 0000' . $this->payment->id)
                    ->line('Amount: NGN' . $this->payment->amount)
                    ->line('Phone: ')
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
