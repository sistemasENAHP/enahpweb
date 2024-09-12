<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
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
use App\Events\SoporteEvento;
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
    public function index()
    {

        $soportes = Soportes::search(request('search'))->paginate();

        return view('Tecnico.index', compact('soportes'));
        
        // return view('Tecnico.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        return Redirect('Tecnico')->with('success', 'Soporte created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnico $tecnico)
    {
        Soportes::find($id)->delete();

        return Redirect::route('Soportes.index')
            ->with('success', 'Soporte deleted successfully');
    }


  public function TecnicoEnEspera(){



        $soportes = Soportes::search(request('search'))->paginate();


        return view('Tecnico.Espera.index', compact('soportes'));

    }



    public function MostrarEspera($id){

        $soporte = Soportes::find($id);
        $TipoFalla = TipoFallas::all();
          $Departamentos = Departamentos::all();

        return view('Tecnico.Espera.show', compact('soporte','TipoFalla','Departamentos'));


    }

    public function MostrarActualizarEspera(Request $request,$id){


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


        return view('Tecnico.Reparando.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id'));



    }


    public function TecnicoReparacionActualizar(Request $request,$id){

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
         broadcast(new SoporteEvento($soporte));

       return Redirect('Reparacion')->with('success', 'Soporte created successfully.');


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
       //   $soporte->FechaSalida = $request->FechaSalida;
         $soporte->Motivo_Falla = $request->Motivo_Falla;
         $soporte->Solucion = $request->Solucion;
         $soporte->Tecnico = $request->tecnico;
         $soporte->update();
         broadcast(new SoporteEvento($soporte));

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
