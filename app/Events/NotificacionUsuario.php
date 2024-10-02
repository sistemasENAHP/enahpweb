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

class NotificacionUsuario implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels,InteractsWithBroadcasting;



    public $Mensaje;
    public $Cedula;
    public $Nombre;
    public $Apellido;
    public $Departamento;
    public $Tecnico;
    /**
     * Create a new event instance.
     */
    public function __construct(Soportes $soportes,$Mensaje)
    {
        $this->broadcastVia('pusher');
        $this->Mensaje = "$Mensaje";
        $this->Nombre = $soportes->Nombre;
        $this->Apellido = $soportes->Apellidos;
         $this->Cedula = $soportes->Cedula;
        $this->Departamento = $soportes->departamentos->Departamento;
        $this->Tecnico = $soportes->Tecnico;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new Channel('usuario-channel');

    }



    public function broadcastAs()
    {
        return new Channel('usuario-event');


    }

     public function broadcastWith(){



         return ['messager' => $this->Mensaje, 'cedula' =>$this->Cedula, 'Tecnico' => $this->Tecnico];



    }
}
