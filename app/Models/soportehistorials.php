<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;
use App\Notifications\SoporteNotificacion;
use Illuminate\Notifications\Notifiable;
/**
 * Class Soportes
 *
 * @property $id
 * @property $departamento_id
 * @property $tipo_falla_id
 * @property $NControl
 * @property $Nombre
 * @property $Apellidos
 * @property $Cedula
 * @property $Correo
 * @property $Telefono
 * @property $ip_equipo
 * @property $FechaEntrada
 * @property $FechaSalida
 * @property $Motivo_Falla
 * @property $Solucion
 * @property $Tecnico
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property TipoFalla $tipoFalla
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class soportehistorials extends Model
{
   use Searchable,Notifiable;



    protected $perPage = 20;
     public $pushNotificationType = 'soportehistorials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['estatus_id','departamento_id', 'tipo_falla_id', 'NControl', 'Nombre', 'Apellidos', 'Cedula', 'Correo', 'Telefono', 'ip_equipo','nombre_equipo','FechaEntrada','FechaSalida', 'Motivo_Falla', 'Solucion', 'Tecnico'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departamentos()
    {
        return $this->belongsTo(\App\Models\Departamentos::class, 'departamento_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoFallas()
    {
        return $this->belongsTo(\App\Models\TipoFallas::class, 'tipo_falla_id', 'id');
    }


    public function estatus()
    {
        return $this->belongsTo(\App\Models\Estatus::class, 'estatus_id', 'id');
    }



    public function toSearchableArray()
{
    return [

        'id' => (int) $this->id,
        'Nombre' => $this->Nombre,
        'NControl' => $this->NControl,
        'Cedula' => $this->Cedula,
        'Tecnico'=> $this->Tecnico,
    ];
}


   public  function incrementContador(){


         $this->increment('NControl');

    } 
}
