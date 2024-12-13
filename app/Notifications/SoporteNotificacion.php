<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\PusherPushNotifications\PusherChannel;
use NotificationChannels\PusherPushNotifications\PusherMessage;
use Pusher\PushNotifications\PushNotifications;
class SoporteNotificacion extends Notification
{

 use Queueable;

    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
   {
       return ['pusher'];
   }

     public function toPusherBeams($notifiable)
    {
       return PusherBeamsMessage::create()
           ->title('Nueva publicación')
           ->body('Revisa la nueva publicación: ')
           ->url('https://tu-app.com/post/');
   }
    
}


