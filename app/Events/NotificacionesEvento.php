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
use App\Models\Pacientes;
use App\Models\User;

class NotificacionesEvento implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    // public  $Cita;
    // public  $Cantidad;
    // public $Personal;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    // public function __construct(Pacientes $Pacientes)
    // {
       

    //     $this->Cita = $Pacientes->cita_id;
    //     $this->Cantidad = $Pacientes->count();
    //     $this->Personal = $Pacientes->persona_pacientes_id;

    

    // }


    


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chat-channel');

    }



    public function broadcastAs()
    {
        return new Channel('chat-event');


    }


    public function broadcastWith(){



        //  return ['messager' => "funciona",

        //       'cita_id'=>  $this->Cita,
        //       'Cantidad' => $this->Cantidad,
        //       'Personal' => $this->Personal,
        // ];
        


    }
}
