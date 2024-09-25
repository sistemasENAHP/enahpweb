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
// use App\Events\SoporteEvento;
// use App\Listeners\SoporteListener;

class SoporteEvento implements ShouldBroadcast
{
   use Dispatchable, InteractsWithSockets, SerializesModels,InteractsWithBroadcasting;

    /**
     * Create a new event instance.
     */
      public $message;
      public $Nombre;
      public $Apellido;
      public $Cedula;
      public $Departamento;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Soportes $soportes)
    {
       $this->broadcastVia('pusher');
       $this->Nombre = $soportes->Nombre;
       $this->Apellido = $soportes->Apellidos;
        $this->Cedula = $soportes->Cedula;
       $this->Departamento = $soportes->departamentos->Departamento;
       
    

    }


    


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */

    public function broadcastOn()
    {
       
          return  new Channel('chat-channel');
          
    }

  


 public function broadcastAs()
    {
         
            return new Channel('chat-event');
            
    }







    // public function broadcastWith(){



    //      return ['messager' => "funciona",

    //           'soporte'=>  $this->soporte,
             
              
    //     ];
        


    // }
}
