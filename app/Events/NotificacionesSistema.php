<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBeUnique;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithBroadcasting;
use app\Models\Soportes;
use App\Models\User;
use App\Models\Notificacions;
class NotificacionesSistema implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels,InteractsWithBroadcasting;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        $this->broadcastVia('pusher');
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
     public function broadcastOn()
    {
        return new Channel('sistema-channel');

    }



    public function broadcastAs()
    {
        return new Channel('sistema-event');


    }
}
