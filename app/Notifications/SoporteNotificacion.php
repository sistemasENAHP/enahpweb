<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\PusherPushNotifications\PusherChannel;
use NotificationChannels\PusherPushNotifications\PusherMessage;

class SoporteNotificacion extends Notification
{

      use Queueable;

         public $message;

        public function __construct($message)
    {
        $this->message = $message;

    }

    public function via($notifiable){

        return [PusherChannel::class];
        // return ['pusher_beams'];

    }


   public function toPushNotification($notifiable)
    {
        return PusherMessage::create()
            ->platform('web')
            ->badge(1)
            ->sound('success')
            ->body("Prueba");
    }


    
    // public function toArray($notifiable): array
    // {
    //     //    event( new PostLiked($notifiable->id ,$this->message));
    //     return [

    //         'title' => 'New Post',
    //         'body' => 'Check out the latest post!',
    //         'interests' => ['new_posts'],
    //     ];
    // }
}

