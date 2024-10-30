<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamentos;
use App\Models\Pisos;
use App\Models\User;
use Laravel\Scout\Searchable;
class ListadoRouter extends Model
{
    use Searchable,HasFactory;

         public function users()
    {

          return $this->belongsTo(User::class,'user_id','id');

    }

      public function pisos()
    {

        return $this->belongsTo(Pisos::class,'piso_id','id');
    }


      public function toSearchableArray()
{
    return [

        'id' => (int) $this->id,
        'Nombre_Wifi' => $this->Nombre_Wifi,
        'Usuario_Root' => $this->Usuario_Root,
        'ip_route' => $this->ip_route,
        'ip_acceso'=> $this->ip_acceso,
    ];
}



}
