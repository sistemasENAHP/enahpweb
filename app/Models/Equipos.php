<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamentos;
use App\Models\Pisos;

class Equipos extends Model
{
    use HasFactory;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['piso_id','departamento_id','Nombre','Apellidos','Cedula','Equipo','Marca','Cantidad_Equipo','Sistema_Operativo','Version','Mouse','Teclado','Corneta','Regulador','DiscoDuroGB','Nombre_Equipo','MacAdress','ip_escuela','ip_ministerio','ProxyDns','Observacion','CasoEspeciales'];


    public function departamentos()
    {

          return $this->belongsTo(Departamentos::class,'departamento_id','id');

    }


    public function pisos()
    {

        return $this->belongsTo(Pisos::class,'piso_id','id');
    }
}
