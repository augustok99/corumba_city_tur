<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Rating;

class RatingLiked extends Notification
{
    use Queueable;

    protected $rating;

    public function __construct(Rating $rating)
    {
        $this->rating = $rating;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your rating has been liked!')
            ->action('View Rating', url('/ratings/' . $this->rating->id))
            ->line('Thank you for using our application!');
    }
}