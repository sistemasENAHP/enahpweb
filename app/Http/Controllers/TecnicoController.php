<?php

namespace App\Http\Controllers;

use App\Models\Tecnicos;
use App\Models\Soportes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SoporteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Models\TipoFallas;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Estatus;
use App\Events\SoporteEvento;
use App\Events\NotificacionesEvento;
use App\Events\NotificacionUsuario;
use App\Models\soportehistorials;
class TecnicoController extends Controller
{


    // public function __construct()
    // {
    //     // los middleware donde protegera la ruta
    //     $this->middleware('can:admin.soporte.index')->only('index');
    //     $this->middleware('can:admin.soporte.create')->only('create', 'store', 'destroy');
    //     $this->middleware('can:admin.soporte.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.soporte.destroy')->only('destroy');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $soportes = Soportes::search(request('search'))->paginate();

        return view('Tecnico.index', compact('soportes'));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $soporte = Soportes::find($id);
        $TipoFalla = TipoFallas::all();
          $Departamentos = Departamentos::all();

        return view('Tecnico.show', compact('soporte','TipoFalla','Departamentos'));
    }


    public function Actualizar(Request $request , $id){

        $soporte = Soportes::find($id);

        $soporte->estatus_id = $request->estatus_id;
        $soporte->departamento_id = $request->departamento_id;
       $soporte->tipo_falla_id = $request->tipo_falla_id;
       $soporte->NControl = $request->NControl;
       $soporte->Nombre = $request->Nombre;
       $soporte->Apellidos = $request->Apellidos;
       $soporte->Cedula = $request->Cedula;
       $soporte->Telefono = $request->Telefono;
       $soporte->Correo = $request->Correo;
       // $soporte->ip_equipo =  $request->ip_maquina;
     //   $soporte->FechaEntrada = $request->FechaEntrada;
     //   $soporte->FechaSalida = $request->FechaSalida;
       $soporte->Motivo_Falla = $request->Motivo_Falla;
       $soporte->Solucion = $request->Solucion;
       $soporte->Tecnico = $request->tecnico;
       $soporte->update();

      
  $Fecha = Carbon::now();
         $soporte = soportehistorials::find($id);
         $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->telefonoI = $request->telefonoI;
          $soporte->Correo = $request->Correo;
          // $soporte->ip_equipo =  $request->ip_maquina;
        //   $soporte->FechaEntrada = $request->FechaEntrada;
        //   $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();



       return Redirect('Tecnico')->with('success', 'Soporte created successfully.');

  }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $soporte = Soportes::find($id);
        $Fecha = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $dates = $Fecha->format('d-m-Y h:i:s A');
        $NControl = Soportes::orderBy('NControl','desc')->first();
        $id = Soportes::all();


        return view('Tecnico.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Fecha = Carbon::now();
         $soporte = Soportes::find($id);
         $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->Correo = $request->Correo;
          // $soporte->ip_equipo =  $request->ip_maquina;
        //   $soporte->FechaEntrada = $request->FechaEntrada;
        //   $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();

       
  $Fecha = Carbon::now();
         $soporte = soportehistorials::find($id);
         $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->telefonoI = $request->telefonoI;
          $soporte->Correo = $request->Correo;
          // $soporte->ip_equipo =  $request->ip_maquina;
        //   $soporte->FechaEntrada = $request->FechaEntrada;
        //   $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();



        return Redirect('Tecnico')->with('success', 'Soporte created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Soportes::find($id)->delete();

        return Redirect::route('Soportes.index')
            ->with('success', 'Soporte deleted successfully');
    }


  public function TecnicoEnEspera(){



        $soportes = Soportes::search(request('search'))->paginate();


        return view('Tecnico.Espera.index', compact('soportes'));

    }



    public function MostrarEspera(Request $request,$id){
        $Cedula = $request->Cedula;

        // dd($Cedula);
        $soporte = Soportes::find($id);
        $TipoFalla = TipoFallas::all();
          $Departamentos = Departamentos::all();
           $soportes = soportehistorials::where('estatus_id','=','4')->OrderBy('id','desc')->paginate();

        return view('Tecnico.Espera.show', compact('soporte','TipoFalla','Departamentos','soportes'))->with('i', ($request->input('page', 1) - 1) * $soportes->perPage());


    }

    public function MostrarActualizarEspera(Request $request,$id){

        $Mensaje = $request->mensaje;

          $Session =   $request->session()->put('Mensaje', $Mensaje);

        $Mostrar = Session('Mensaje');
        //   dd($Mostrar);


        $soporte = Soportes::find($id);

        $soporte->estatus_id = $request->estatus_id;
        $soporte->departamento_id = $request->departamento_id;
       $soporte->tipo_falla_id = $request->tipo_falla_id;
       $soporte->NControl = $request->NControl;
       $soporte->Nombre = $request->Nombre;
       $soporte->Apellidos = $request->Apellidos;
       $soporte->Cedula = $request->Cedula;
       $soporte->Telefono = $request->Telefono;
       $soporte->Correo = $request->Correo;
       // $soporte->ip_equipo =  $request->ip_maquina;
     //   $soporte->FechaEntrada = $request->FechaEntrada;
     //   $soporte->FechaSalida = $request->FechaSalida;
       $soporte->Motivo_Falla = $request->Motivo_Falla;
       $soporte->Solucion = $request->Solucion;
       $soporte->Tecnico = $request->tecnico;
       $soporte->update();
       broadcast(new NotificacionUsuario($soporte,$Mostrar));

         
  $Fecha = Carbon::now();
         $soporte = soportehistorials::find($id);
         $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->telefonoI = $request->telefonoI;
          $soporte->Correo = $request->Correo;
          // $soporte->ip_equipo =  $request->ip_maquina;
        //   $soporte->FechaEntrada = $request->FechaEntrada;
        //   $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();



       return Redirect('Espera')->with('success', 'Soporte created successfully.');



    }

        public function TecnicoEsperarEditar(Request $request,$id){

       $soporte = Soportes::find($id);
        $Fecha = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $dates = $Fecha->format('d-m-Y h:i:s A');
        $NControl = Soportes::orderBy('NControl','desc')->first();
        $id = Soportes::all();


        return view('Tecnico.Espera.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id'));
    }



    public function TecnicoActualizarEspera(Request $request,$id){



         $Fecha = Carbon::now();
         $soporte = Soportes::find($id);
         $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->telefonoI = $request->telefonoI;
          $soporte->Correo = $request->Correo;
          // $soporte->ip_equipo =  $request->ip_maquina;
        //   $soporte->FechaEntrada = $request->FechaEntrada;
        //   $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();

  $Fecha = Carbon::now();
         $soporte = soportehistorials::find($id);
         $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->telefonoI = $request->telefonoI;
          $soporte->Correo = $request->Correo;
          // $soporte->ip_equipo =  $request->ip_maquina;
        //   $soporte->FechaEntrada = $request->FechaEntrada;
        //   $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();



        return Redirect('Espera')->with('success', 'Soporte created successfully.');

    }





    public function TecnicoReparacion(){



        $soportes = Soportes::search(request('search'))->paginate();


        return view('Tecnico.Reparando.index', compact('soportes'));

    }


    public function TecnicoReparacionEditar(Request $request,$id){


        $soporte = Soportes::find($id);
        $Fecha = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $dates = $Fecha->format('d-m-Y h:i:s A');
        $NControl = Soportes::orderBy('NControl','desc')->first();
        $id = Soportes::all();
        $Estatus = Estatus::all();


        return view('Tecnico.Reparando.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id','Estatus'));



    }


    public function TecnicoReparacionActualizar(Request $request,$id){

        $Fecha = Carbon::now();
        $soporte = Soportes::find($id);
        if( $request->input('Pendiente') == 3){

             $soporte->estatus_id = 3;

        }else if($request->input('Pendiente') == false){

            $soporte->estatus_id = 4;
             broadcast(new NotificacionesEvento($soporte));
        }
        // $soporte->estatus_id = $request->estatus_id;
         $soporte->departamento_id = $request->departamento_id;
         $soporte->tipo_falla_id = $request->tipo_falla_id;
         $soporte->NControl = $request->NControl;
         $soporte->NControlTecnico = $request->NControlTecnico;
         $soporte->Nombre = $request->Nombre;
         $soporte->Apellidos = $request->Apellidos;
         $soporte->Cedula = $request->Cedula;
         $soporte->Telefono = $request->Telefono;
         $soporte->Correo = $request->Correo;
         // $soporte->ip_equipo =  $request->ip_maquina;
         $soporte->FechaEntrada = $request->FechaEntrada;
         $soporte->FechaSalida = $request->FechaSalida;
         $soporte->Motivo_Falla = $request->Motivo_Falla;
         $soporte->SolucionPendiente = $request->SolucionPendiente;
         $soporte->Solucion = $request->Solucion;
         $soporte->Tecnico = $request->tecnico;
         $soporte->update();

         $soportehistorial = soportehistorials::find($id);
        if( $request->input('Pendiente') == 3){

             $soportehistorial->estatus_id = 3;

        }else if($request->input('Pendiente') == false){

            $soportehistorial->estatus_id = 4;
             // broadcast(new NotificacionesEvento($soporte));
        }
        // $soporte->estatus_id = $request->estatus_id;
         $soportehistorial->departamento_id = $request->departamento_id;
         $soportehistorial->tipo_falla_id = $request->tipo_falla_id;
         $soportehistorial->NControl = $request->NControl;
         $soporte->NControlTecnico = $request->NControlTecnico;
         $soportehistorial->Nombre = $request->Nombre;
         $soportehistorial->Apellidos = $request->Apellidos;
         $soportehistorial->Cedula = $request->Cedula;
         $soportehistorial->Telefono = $request->Telefono;
         $soportehistorial->Correo = $request->Correo;
         // $soporte->ip_equipo =  $request->ip_maquina;
         $soportehistorial->FechaEntrada = $request->FechaEntrada;
         $soportehistorial->FechaSalida = $request->FechaSalida;
         $soportehistorial->Motivo_Falla = $request->Motivo_Falla;
         $soportehistorial->SolucionPendiente = $request->SolucionPendiente;
         $soportehistorial->Solucion = $request->Solucion;
         $soportehistorial->Tecnico = $request->tecnico;
         $soportehistorial->update();






       return Redirect('Reparacion')->with('success', 'Soporte created successfully.');


    }



        public function TecnicoPendiente(){



        $soportes = Soportes::search(request('search'))->paginate();


        return view('Tecnico.Pendientes.index', compact('soportes'));

    }


    public function TecnicoPendienteEditar(Request $request,$id){


        $soporte = Soportes::find($id);
        $Fecha = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $dates = $Fecha->format('d-m-Y h:i:s A');
        $NControl = Soportes::orderBy('NControl','desc')->first();
        $id = Soportes::all();
        $Estatus = Estatus::all();


        return view('Tecnico.Pendientes.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id','Estatus'));



    }


    public function TecnicoPendienteActualizar(Request $request,$id){

        $Fecha = Carbon::now();
        $soporte = Soportes::find($id);
        $soporte->estatus_id = $request->estatus_id;
         $soporte->departamento_id = $request->departamento_id;
         $soporte->tipo_falla_id = $request->tipo_falla_id;
         $soporte->NControl = $request->NControl;
         $soporte->NControlTecnico = $request->NControlTecnico;
         $soporte->Nombre = $request->Nombre;
         $soporte->Apellidos = $request->Apellidos;
         $soporte->Cedula = $request->Cedula;
         $soporte->Telefono = $request->Telefono;
         $soporte->Correo = $request->Correo;
         // $soporte->ip_equipo =  $request->ip_maquina;
       //   $soporte->FechaEntrada = $request->FechaEntrada;
         $soporte->FechaSalida = $request->FechaSalida;
         $soporte->Motivo_Falla = $request->Motivo_Falla;
         $soporte->Solucion = $request->Solucion;
         $soporte->Tecnico = $request->tecnico;
         $soporte->update();
         broadcast(new NotificacionesEvento($soporte));

          $Fecha = Carbon::now();
        $soporte = soportehistorials::find($id);
        $soporte->estatus_id = $request->estatus_id;
         $soporte->departamento_id = $request->departamento_id;
         $soporte->tipo_falla_id = $request->tipo_falla_id;
         $soporte->NControl = $request->NControl;
         $soporte->NControlTecnico = $request->NControlTecnico;
         $soporte->Nombre = $request->Nombre;
         $soporte->Apellidos = $request->Apellidos;
         $soporte->Cedula = $request->Cedula;
         $soporte->Telefono = $request->Telefono;
         $soporte->Correo = $request->Correo;
         // $soporte->ip_equipo =  $request->ip_maquina;
       //   $soporte->FechaEntrada = $request->FechaEntrada;
         $soporte->FechaSalida = $request->FechaSalida;
         $soporte->Motivo_Falla = $request->Motivo_Falla;
         $soporte->Solucion = $request->Solucion;
         $soporte->Tecnico = $request->tecnico;
         $soporte->update();


       return Redirect('Pendiente')->with('success', 'Soporte created successfully.');


    }


    public function TecnicoTerminado(Request $request){

        $soportes = Soportes::search(request('search'))->paginate();
        // $soportes = Soportes::where('estatus_id','=',3);

        return view('Tecnico.Terminado.index', compact('soportes'))->with('i', ($request->input('page', 1) - 1) * $soportes->perPage());;

    }

    public function TecnicoTerminadoEditar(Request $request,$id){

        $soporte = Soportes::find($id);
        $Fecha = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $dates = $Fecha->format('d-m-Y h:i:s A');
        $NControl = Soportes::orderBy('NControl','desc')->first();
        $id = Soportes::all();


        return view('Tecnico.Terminado.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id'));


    }



    public function TecnicoTerminadoActualizar(Request $request,$id){


           $Fecha = Carbon::now();
        $soporte = Soportes::find($id);
        $soporte->estatus_id = $request->estatus_id;
         $soporte->departamento_id = $request->departamento_id;
         $soporte->tipo_falla_id = $request->tipo_falla_id;
         $soporte->NControl = $request->NControl;
         $soporte->Nombre = $request->Nombre;
         $soporte->Apellidos = $request->Apellidos;
         $soporte->Cedula = $request->Cedula;
         $soporte->Telefono = $request->Telefono;
         $soporte->Correo = $request->Correo;
         // $soporte->ip_equipo =  $request->ip_maquina;
       //   $soporte->FechaEntrada = $request->FechaEntrada;
         $soporte->FechaSalida = $request->FechaSalida;
         $soporte->Motivo_Falla = $request->Motivo_Falla;
         $soporte->Solucion = $request->Solucion;
         $soporte->Tecnico = $request->tecnico;
         $soporte->update();
         broadcast(new SoporteEvento($soporte));

             $Fecha = Carbon::now();
        $soporte = soportehistorials::find($id);
        $soporte->estatus_id = $request->estatus_id;
         $soporte->departamento_id = $request->departamento_id;
         $soporte->tipo_falla_id = $request->tipo_falla_id;
         $soporte->NControl = $request->NControl;
         $soporte->Nombre = $request->Nombre;
         $soporte->Apellidos = $request->Apellidos;
         $soporte->Cedula = $request->Cedula;
         $soporte->Telefono = $request->Telefono;
         $soporte->Correo = $request->Correo;
         // $soporte->ip_equipo =  $request->ip_maquina;
       //   $soporte->FechaEntrada = $request->FechaEntrada;
         $soporte->FechaSalida = $request->FechaSalida;
         $soporte->Motivo_Falla = $request->Motivo_Falla;
         $soporte->Solucion = $request->Solucion;
         $soporte->Tecnico = $request->tecnico;
         $soporte->update();


       return Redirect('/Terminado')->with('success', 'Soporte created successfully.');


    }





    public function BuscadorSoporte(Request $request){


        if($request->ajax()){
          $query  = $request->get('Buscar');
          $soportes = Soportes::where('NControl','like',"%$query%")->get();

         return view('soporte.buscador', compact('soportes'));
         //   return response()->json($soportes);
         }

 }
}
