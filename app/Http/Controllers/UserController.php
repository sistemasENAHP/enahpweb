<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
// use app\Http\Middleware;
use App\Models\Departamentos;
use App\Models\Ips;
use Spatie\Permission\Middleware\RoleMiddleware;
use App\Notifications\SoporteNotificacion;
use Pusher\Pusher;
class UserController extends Controller implements HasMiddleware
{

public static function middleware(): array
{
    return [
        // examples with aliases, pipe-separated names, guards, etc:
        'role_or_permission:Administrador|Coordinador|Tecnico',
        new Middleware('role:Administrador|Coordinador|Tecnico'),
        // new Middleware(RoleMiddleware::using('Administrador'), except:['index']),
        
    ];
}


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $users = User::search(request('search'))->OrderBy('id','asc')->paginate();

        return view('user.index', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $user = new User();
         $roles = Role::pluck('name','name')->all();
         $UsersRoles = $user->roles()->pluck('name','name');
         $Departamentos = Departamentos::all();
         $ip = $request->ip();
         $machineName = gethostname();

        return view('user.create', compact('user','roles','UsersRoles','Departamentos','ip','machineName'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): RedirectResponse
    {
        // $validated = $request->safe();
        // User::create($request->validated());

        // $User = new User();
        // $User->name = $request->name;
        // $User->surname = $request->surname;
        // $User->identification_card = $request->identification_card;
        // $User->user = $request->user;
        // $User->email = $request->email;
        // $User->password = $request->password;
        // $User->password = $request->confirm_password;
        // $User->save();

         $users = $request->all();
        $users['password'] = Hash::make($users['password']);

        $user = User::create($users);
        $user->assignRole($request->role_id);

        return Redirect::route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id): View
    {
        $user = User::FindorFail($id);
        $roles = Role::pluck('name','name')->all();
        $UsersRoles = $user->roles()->pluck('name','name');
        $Departamentos = Departamentos::all();
         $ip = $request->ip();
        return view('user.edit', compact('user','roles','UsersRoles','Departamentos','ip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // $user->update($request->validated());

         $Users = User::FindOrFail($id);
        $Users->roles()->sync($request->roles);
        $Users->departamento_id = $request->departamento_id;
        $Users->name = $request->name;
        $Users->surname = $request->surname;
        $Users->telefono = $request->telefono;
        $Users->telefonoI = $request->telefonoI;
        $Users->ip_equipo = $request->ip_equipo;
        $Users->nombre_equipo = $request->nombre_equipo;
        $Users->identification_card = $request->identification_card;
        $Users->email = $request->email;

        if($Users->password == $request->password):
         $Users->password = $request->password;
        else:
         $Users->password = bcrypt($request->password);
        endif;


         


        $Users->update();
         // $Users->notify(new SoporteNotificacion($Users));

         DB::table('model_has_roles')->where('model_id',$id)->delete();
        $Users->assignRole($request->role_id);

            $ip = $request->ip();
             $ip1 = $request->ip_equipo;     
             $ipr = substr($ip1,7);
               $ips = ips::FindOrFail($ipr);
             if($ips->ip_escuela > '10.2.2.0' and $ips->ip_escuela < '10.2.2.400'){
              
                $ips->user_id = $Users->id;
                $ips->ip_escuela = $request->ip_equipo;
                $ips->Observacion = 'Ocupado';
                 $ips->update();

             }elseif($ips->ip_ministerio > '10.95.10.0' and $ips->ip_ministerio < '10.95.10.400'){
                
                $ipr = substr($ip1,9);
                $ips->user_id = $Users->id;
                $ips->ip_ministerio = $request->ip_equipo;
                $ips->Observacion = 'Ocupado';
                  $ips->update();


             }

            
           


                 $ip_vieja = $request->ip_viejo;
                
              
               if($ip_vieja > '10.2.2.0' or $ip_vieja <= '10.2.2.255' ){
                 
                 $ipviejo = substr($ip_vieja,7);
                 $ips = Ips::Find($ipviejo);
                 $ips->user_id = null;
                $ips->ip_escuela = $request->ip_viejo;
                $ips->Observacion = 'Libre';
                 $ips->update();    
                

             }elseif($ip_vieja > '10.95.10.0' or $ip_vieja <= '10.95.10.255' ){

                 $ipviejo = substr($ip_vieja,9);
                 $ips = Ips::Find($ipviejo);
                $ips->user_id = null;
                $ips->ip_ministerio = $request->ip_viejo;
                $ips->Observacion = 'Libre';
                $ips->created_at = null;
                $ips->updated_at = null;
                 $ips->update();
                
             }

             if($ip_vieja > '10.2.2.0' or $ip_vieja <= '10.2.2.255' ){
                 
                 $ipviejo = substr($ip_vieja,7);
                 $ips = Ips::Find($ipviejo);
                 $ips->user_id = null;
                $ips->ip_escuela = $request->ip_viejo;
                $ips->Observacion = 'Libre';
                $ips->created_at = null;
                $ips->updated_at = null;
                 $ips->update();    
                

             }elseif($ip_vieja > '10.95.10.0' or $ip_vieja <= '10.95.10.255' ){

                 $ipviejo = substr($ip_vieja,9);
                 $ips = Ips::Find($ipviejo);
                $ips->user_id = null;
                $ips->ip_ministerio = $request->ip_viejo;
                $ips->Observacion = 'Libre';
                $ips->created_at = null;
                $ips->updated_at = null;
                 $ips->update();
                
             }
              

    
        return Redirect::route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy(Request $request,$id): RedirectResponse
    {
            $user =   User::find($id);
             $ip = $request->ip();
             $ipr = substr($ip,7);

             $ips = ips::FindOrFail($ipr);
             if($ips->ip_escuela > '10.2.2.0' && $ips->ip_escuela < '10.2.2.400'){
                $ips->user_id = Null;
                // $ips->ip_escuela = $ip;
                $ips->Observacion = 'Libre';

             }elseif($ips->ip_ministerio > '10.95.10.0' && $ips->ip_ministerio < '10.95.10.400'){
                $ips->user_id = Null;
                // $ips->ip_ministerio = $ip;
                $ips->Observacion = 'Libre';

             }

             $ips->update();
             $user->delete();

        return Redirect::route('users.index')
            ->with('success', 'User deleted successfully');
    }

    //  public function subscribe(Request $request)
    // {
    //     // Guarda la suscripción del usuario en la base de datos
    //     // ...

    //     $options = array(
    //         'cluster' => 'mt1',
    //         'useTLS' => true
    //     );
    //     $pusher = new Pusher(
    //         env('PUSHER_APP_KEY'),
    //         env('PUSHER_APP_SECRET'),
    //         env('PUSHER_APP_ID'),
    //         $options 

    //     );

    //     $pusher->trigger('my-channel', 'my-event',"hola");

    //     return response()->json(['success' => true]);
    // }

}
