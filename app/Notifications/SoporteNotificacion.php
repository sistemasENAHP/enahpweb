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
        // return ['pusher'];

        return [PusherChannel::class];
    }

    public function toPushNotification($notifiable)
    {
        // $beamsClient = new PushNotifications();

        // // ... configuración de Pusher

        // return $beamsClient->publish()
        //     ->toUser('user_id')
        //     ->with(['title' => 'Nuevo mensaje', 'body' => $this->message])
        //     ->send();

          return PusherMessage::create()
            ->iOS()
            ->badge(1)
            ->sound('success')
            ->body("Your {$notifiable->service} account was approved!");
    }
}


