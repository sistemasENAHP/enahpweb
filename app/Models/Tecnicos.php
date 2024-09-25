<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;
use App\Notifications\SoporteNotificacion;
use Illuminate\Notifications\Notifiable;
// use Spatie\EloquentSortable\Sortable;
// use Spatie\EloquentSortable\SortableTrait;
// use App\Models\Departamentos;
// use App\Models\TipoFallas;
class Tecnicos extends Model
{
    use Searchable,Notifiable;

    protected $perPage = 20;
     public $pushNotificationType = 'tecnico';

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
}
