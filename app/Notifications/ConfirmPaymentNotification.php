<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmPaymentNotification extends Notification
{
    use Queueable;
    protected $payment;

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
                    ->greeting('Dear ' . $this->payment->name . ',')
                    ->line('I am Adaeze and we are excited to have you here.')
                    ->line("When we launched Bloom Academy, we had the goal of creating a space where we could empower people to make a futuristic impact with their skills and give them confidence through in-depth training in their area of interests.")
                    ->line('And now that you are signed up, we cannot wait to see you Bloom.')
                    ->line('We would also keep you up-to-date with necessary information to make your journey at Bloom Academy a memorable one.')
                    ->line('In the meantime, if you have any questions, concerns or feedback - I’m always here.')
                    ->line("Your Registered Course Details: ")
                    ->line('Course: ' . $this->payment->course)
                    ->line('Your payment reference is: 0000' . $this->payment->id)
                    ->line('Amount: NGN' . $this->payment->amount)
                    ->line('Warm Regards,')
                    ->line('Adaeze from Bloom Academy.')
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
