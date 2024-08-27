<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
class Tecnico extends Model
{
    use HasFactory,Searchable;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['departamento_id', 'tipo_falla_id', 'NControl', 'Nombre', 'Apellidos', 'Cedula', 'Correo', 'Telefono', 'ip_equipo','FechaEntrada','FechaSalida', 'Motivo_Falla', 'Solucion', 'Tecnico'];



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
