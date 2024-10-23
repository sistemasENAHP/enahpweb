<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamentos;
use App\Models\Pisos;
use App\Models\User;
class Telefonos extends Model
{
    use HasFactory;


      public function users()
    {

          return $this->belongsTo(User::class,'user_id','id');

    }

      public function pisos()
    {

        return $this->belongsTo(Pisos::class,'piso_id','id');
    }
}
