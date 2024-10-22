<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use App\Models\Departamentos;
use App\Models\Ips;
use Laravel\Scout\Searchable;
class User extends Authenticatable
{
    use  HasFactory, Notifiable, HasRoles, Notifiable,Searchable;

    protected $perPage = 20;
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'users';
    protected $fillable = [
        'id',
        'departamento_id',
        'name',
        'surname',
        'identification_card',
        'ip_equipo',
        'nombre_equipo',
        'telefono',
        'telefonoI',
        'email',
        'password',
    ];



    public $timestamps = 'true';



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

         protected $casts = [
        'last_login_at' => 'datetime',
    ];



    public function departamentos()
    {

          return $this->belongsTo(Departamentos::class,'departamento_id','id');

    }

    // public function ips()
    // {

    //       return $this->belongsTo(Ips::class);

    // }


       public function toSearchableArray()
{
    return [

        'id' => (int) $this->id,
         'name' => $this->name,
    ];
}


// public function updateLastLogin()
// {
//     $this->last_login = now();
//     $this->save();
// }




}
