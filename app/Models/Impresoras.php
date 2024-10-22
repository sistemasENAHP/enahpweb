<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pisos;
use Laravel\Scout\Searchable;
class Impresoras extends Model
{
    use HasFactory,Searchable;

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
        'Equipo' => $this->Equipo,
        'Marca' => $this->Marca,
        // 'users' => $this->users?->name,


    
    ];
}

}
