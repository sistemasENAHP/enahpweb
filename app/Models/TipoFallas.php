<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFallas extends Model
{
    use HasFactory;
    protected $table = 'tipo_fallas';
    protected $fillable = ['id','Tipo_Falla'];
}
