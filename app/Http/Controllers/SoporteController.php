<?php

namespace App\Http\Controllers;

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
use App\Notifications\SoporteNotificacion;
use Illuminate\Notifications\Notifiable;
use App\Events\SoporteEvento;
class SoporteController extends Controller
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
    public function index(): View
    {
        // $soportes = Soportes::paginate();

        // return view('soporte.index', compact('soportes'))
        //     ->with('i', ($request->input('page', 1) - 1) * $soportes->perPage());

        $soportes = Soportes::search(request('search'))->paginate();

        return view('soporte.index', compact('soportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $Fecha = Carbon::now();

        $soporte = new Soportes();
        // $soporte->increment('NControl');
        // $date = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $date = $Fecha->format('d-m-Y h:i:s A');
        $agent = new Agent();
        $macAddress = $agent->isDesktop();
        $hostname = exec('getmac');
        $hostname = strtok($hostname, ' ');
        $machineName = gethostname();
        $NControl = Soportes::orderBy('NControl','desc')->first();


        return view('soporte.create', compact('soporte','Departamentos','TipoFalla','ip','date','hostname','macAddress','NControl','machineName'));
    }

    /**
     * Store a newly created resource in storage.SoporteRequest
     */
    public function store(Request $request): RedirectResponse
    {
        // Soportes::create($request->validated());
          $Fecha = Carbon::now();
          $soporte = new Soportes();
          $soporte->estatus_id = $request->estatus_id;
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->Correo = $request->Correo;
          $soporte->ip_equipo =  $request->ip_maquina;
           $soporte->nombre_equipo =  $request->nombre_equipo;
          $soporte->FechaEntrada = $request->FechaEntrada;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->save();
          
                    broadcast(new SoporteEvento($soporte));
                    $soporte->notify(new SoporteNotificacion("hola"));

        return Redirect('/EstatusSoporte')->with('success', 'Soporte created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $TipoFalla = TipoFallas::all();
          $Departamentos = Departamentos::all();

          $soporte = Soportes::find($id);


        return view('soporte.show', compact('soporte','TipoFalla','Departamentos'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request , $id): View
    {
        $soporte = Soportes::find($id);
        $Fecha = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $dates = $Fecha->format('d-m-Y h:i:s A');
         $NControl = Soportes::orderBy('NControl','desc')->first();
         $id = Soportes::all();


        return view('soporte.edit', compact('soporte','Departamentos','TipoFalla','ip','dates','NControl','id'));
    }

    /**
     * Update the specified resource in storage SoporteRequest.
     */
    public function update(Request $request, $id): RedirectResponse
    {
         $Fecha = Carbon::now();
         $soporte = Soportes::find($id);
           $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->Correo = $request->Correo;
          $soporte->nombre_equipo =  $request->nombre_equipo;
          $soporte->FechaEntrada = $request->FechaEntrada;
          // $soporte->FechaSalida = $request->FechaSalida;
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();

        return Redirect('/EstatusSoporte')->with('success', 'Soporte created successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        Soportes::find($id)->delete();

        return Redirect::route('Soportes.index')
            ->with('success', 'Soporte deleted successfully');
    }



    // public function BuscadorSoporte(Request $request){


    //        if($request->ajax()){
    //          $query  = $request->get('Buscar');
    //          $soportes = Soportes::where('NControl','like',"%$query%")->get();

    //         return view('soporte.buscador', compact('soportes'));
    //         //   return response()->json($soportes);
    //         }

    // }



    public function buscarUsers(Request $request){
         $Fecha = Carbon::now();
         $soporte = Soportes::search(request('UsuarioRegistrado'))->get();
          // $Soportes = Soportes::search(request('UsuarioRegistrado'))->get();
         $NControl = Soportes::orderBy('NControl','desc')->first();
         $Departamentos = Departamentos::all();
         $ip = $request->ip();
        $TipoFalla = TipoFallas::all();
        $date = $Fecha->format('d-m-Y h:i:s A');

         // foreach($soportes as $soporte){



         // }

        return view('soporte.buscar', compact('soporte','NControl','Departamentos','TipoFalla','ip','date'));

     }


    public function EstatusSoportes(){


       $soportes = Soportes::search(request('search'))->paginate();

        return view('soporte.estatus', compact('soportes'));



    }

 }



