<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class articleVerified extends Notification
{
    use Queueable;

    public $article;

    public function __construct($article)
    {
        $this->article = $article;
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
        return (new MailMessage)
            ->subject($this->article->article_title ." Approved ")
            ->greeting("Hello ". $this->article->name. ' your submitted article has been approved by JOSTED')
            ->line('----------------------------------------------------------')
            ->line('Article Details : ')
            ->line('Name of author : ' .$this->article->name_of_author)
            ->line('Article Title : ' .$this->article->article_title)
            ->line('Subject Area : ' .$this->article->subject_area)
                    ->line('Thank you for using JOSTED!');
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
