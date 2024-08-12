<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
// use Spatie\EloquentSortable\Sortable;
// use Spatie\EloquentSortable\SortableTrait;
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

    // public static function booted() 

    // {
    //     static::creating(function ($model) {
    //         $lastProduct = static::orderBy('NControl', 'desc')->first();
    //         $lastCodeNumber = preg_replace('/[^0-9]/', '', $lastProduct->NControl ?? 'SP-000');
    //         // $model->NControl = substr(Auth()->user()->name,0,1)  .substr(Auth()->user()->surname,0,1) . "-".str_pad($lastCodeNumber + 1, 3, '0', STR_PAD_LEFT);
    //         $model->NControl = substr(Auth()->user()->name,0,1)  .substr(Auth()->user()->surname,0,1).str_pad($lastCodeNumber + 1, 3, '0', STR_PAD_LEFT);


    //         return $lastProduct;

    //     });
    // }

    //   public static function getFormattedCodeAttribute()
    // {
    //     $lastProduct = static::orderBy('NControl', 'desc')->first();
    //     return 'SP-' . str_pad($lastProduct, 3, '0', STR_PAD_LEFT);
    // }

}
