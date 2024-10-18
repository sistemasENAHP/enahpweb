<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Http\Requests\UserRequest;
use App\Models\Listadoips;
use App\Models\Ips;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request): View
    {
        $Departamentos = Departamentos::all();
        $ip = $request->ip();
        $machineName = gethostname();

        // $ip  = getenv("REMOTE_ADDR");
        $machineName1 = getenv("computername");
        return view('auth.register',compact('Departamentos','ip','machineName','machineName1'));
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(UserRequest $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

         $validated = $request->safe();

        $users = $request->all();
        $users['password'] = Hash::make($users['password']);
        $users['nombre_equipo'] = $request->nombre_equipo;
        $roles = $request->role_id = 4;
        $user = User::create($users);
        $user->assignRole($roles);
        

        Auth::login($user);

         $ListaIp = new Listadoips();

        if( $request->departamento_id <= 21){

            $ListaIp->piso_id = 1;

            }else if($request->departamento_id >= 21  || $request->departamento_id <=31){

              $ListaIp->piso_id = 2;

            }else if($request->departamento_id >=31){

              $ListaIp->piso_id = 3;

            }
            
            $ListaIp->departamento_id = $request->departamento_id;
            $ListaIp->Nombre = $request->name;
            $ListaIp->Apellido = $request->surname;
            $ListaIp->Cedula = $request->identification_card;
            $ListaIp->Equipo = $request->nombre_equipo;
            $ListaIp->Escuela =  $request->ip_equipo;
            $ListaIp->Ministerio = $request->ip_ministerio;
            $ListaIp->Observacion = $request->Observaciones;
             $ListaIp->save();

             $ip = $request->ip();
             $ipr = substr($ip,7);
             
             $ips = ips::FindOrFail($ipr);
             if($ips->ip_escuela > '10.2.2.0' && $ips->ip_escuela < '10.2.2.400'){
                $ips->ip_escuela = $ip;
                $ips->Observacion = 'Ocupado';
             
             }elseif($ips->ip_ministerio > '10.95.10.0' && $ips->ip_ministerio < '10.95.10.400'){

                $ips->ip_ministerio = $ip;
                $ips->Observacion = 'Ocupado';

             } 

              $ips->update();


            //  if($ips->ip_escuela > '192.168.0.1' && $ips->ip_escuela > '192.168.1.1' && $ips->ip_escuela < '192.168.0.500' && $ips->ip_escuela < '192.168.1.500'){

            //      return Redirect::route('users.index')->with('success', 'User deleted successfully');

               
        
            // } 


            // if($ips->ip_escuela == '127.0.0.1' ){

            //      return Redirect::route('users.index')->with('success', 'User deleted successfully');


            // }
             
            




             

        return redirect(route('dashboard', absolute: false));
    }
}
