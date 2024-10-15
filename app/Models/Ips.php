<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Ips extends Model
{
    use HasFactory, Searchable;

    public function toSearchableArray()
    {
        return [

            'ip_escuela' => (int) $this->ip_escuela,
            'ip_ministerio' => $this->ip_ministerio,
            'Observacion' => $this->Observacion,

        ];
    }

}
