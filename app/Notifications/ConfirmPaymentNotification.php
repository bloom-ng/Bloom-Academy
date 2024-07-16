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
                    ->greeting('Hello ' . $this->payment->name . ',')
                    ->line("You have successfully registered for a course with the Bloom Academy Affrica. Our Community Manager will reach out to you shortly to enlist you into the next programme.
                            For any enquiry, please reach out to us via the below contact details and follow us on social media.
                            Happy learning!"
                    )
                    ->line('Course: ' . $this->payment->course)
                    ->line('Your payment reference is: 0000' . $this->payment->id)
                    ->line('Amount: NGN' . $this->payment->amount)
                    ->line('The Bloom Academy Affrica Team')
                    ->line('Phone: ')
                    ->line('Socials: [Instagram](https://www.instagram.com/bloomacademyafrica) - [Twitter](https://twitter.com/bloomacademy_)- [TikTok](https://www.tiktok.com/@bloomacademyafrica) - [LinkedIn](https://www.linkedin.com/company/bloomacademyafrica)')
                    ->action('Bloom Academy Africa', url('/'))
                    ->line('Thank you for using our application!');
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
