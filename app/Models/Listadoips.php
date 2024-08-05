<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamentos;
use App\Models\Pisos;
/**
 * Class Listadoips
 *
 * @property $id
 * @property $departamento_id
 * @property $piso_id
 * @property $Nombre
 * @property $Apellido
 * @property $Cedula
 * @property $Ministerio
 * @property $Escuela
 * @property $Observacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listadoips extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['departamento_id','piso_id','Nombre','Apellido','Cedula','Ministerio', 'Escuela','Observacion'];



    public function departamentos()
    {

           return $this->belongsTo(Departamentos::class, 'departamento_id','id');

    }

    public function pisos()
    {
        return $this->belongsTo(Pisos::class, 'piso_id','id');

    }


}
