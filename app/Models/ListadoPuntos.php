<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamentos;
use App\Models\Pisos;
class ListadoPuntos extends Model
{
    use HasFactory;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['departamento_id','piso_id','Nombre','Apellido','Cedula','Puntos','PuertoPatch','NPuertoSwitch','Observacion'];


 /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

  public function departamentos()
  {

      return $this->belongsTo(Departamentos::class, 'departamento_id', 'id');

  }

  public function pisos()
  {
      return $this->belongsTo(Pisos::class, 'piso_id','id');

  }


}
