<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Departamentos;
// use App\Models\TipoFallas;
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
class Soportes extends Model
{

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


    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         $model->NControl = generateRandomString();
    //     });
    // }

}
