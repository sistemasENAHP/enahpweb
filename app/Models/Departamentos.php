<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pisos;
class Departamentos extends Model
{
    use HasFactory;

    protected $fillable = ['piso_id', 'Departamento'];

    public function pisos()
    {

        return $this->belongsTo(Pisos::class,'piso_id','id');
    }
}
