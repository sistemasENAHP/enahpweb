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
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
// use Jenssegers\Agent\Facades\Agent;
class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $soportes = Soportes::paginate();

        return view('soporte.index', compact('soportes'))
            ->with('i', ($request->input('page', 1) - 1) * $soportes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $soporte = new Soportes();
        $date = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $date = $date->format('d-m-Y h:i:s A');
        $agent = new Agent();
        $macAddress = $agent->isDesktop();
        // $hostname = exec('getmac');
        $hostname = exec('getmac');
        $hostname = strtok($hostname, ' ');
        $machineName = gethostname();
        $NControl = Soportes::orderBy('NControl','desc')->first();
        // $NControl = Soportes::getFormattedCodeAttribute();

        return view('soporte.create', compact('soporte','Departamentos','TipoFalla','ip','date','hostname','macAddress','NControl'));
    }

    /**
     * Store a newly created resource in storage.SoporteRequest
     */
    public function store(Request $request): RedirectResponse
    {
        // Soportes::create($request->validated());

          $soporte = new Soportes();
          $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->Correo = $request->Correo;
          $soporte->ip_equipo =  $request->ip_maquina;
          $soporte->FechaEntrada = date('Y-m-d H:i:s');
          $soporte->FechaSalida = date('Y-m-d H:i:s');
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->save();

        return Redirect('/Soportes/create')->with('success', 'Soporte created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $soporte = Soportes::find($id);

        return view('soporte.show', compact('soporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request , $id): View
    {
        $soporte = Soportes::find($id);
        $date = Carbon::now();
        $ip = $request->ip();
        $Departamentos = Departamentos::all();
        $TipoFalla = TipoFallas::all();
        $date = $date->format('d-m-Y h:i:s A');
         $NControl = Soportes::orderBy('NControl','desc')->first();
         $id = Soportes::all();


        return view('soporte.edit', compact('soporte','Departamentos','TipoFalla','ip','date','NControl','id'));
    }

    /**
     * Update the specified resource in storage SoporteRequest.
     */
    public function update(Request $request, $id): RedirectResponse
    {
         $soporte = Soportes::find($id);
           $soporte->departamento_id = $request->departamento_id;
          $soporte->tipo_falla_id = $request->tipo_falla_id;
          $soporte->NControl = $request->NControl;
          $soporte->Nombre = $request->Nombre;
          $soporte->Apellidos = $request->Apellidos;
          $soporte->Cedula = $request->Cedula;
          $soporte->Telefono = $request->Telefono;
          $soporte->Correo = $request->Correo;
          $soporte->ip_equipo =  $request->ip_maquina;
          $soporte->FechaEntrada = date('Y-m-d H:i:s');
          $soporte->FechaSalida = date('Y-m-d H:i:s');
          $soporte->Motivo_Falla = $request->Motivo_Falla;
          $soporte->Solucion = $request->Solucion;
          $soporte->Tecnico = $request->tecnico;
          $soporte->update();

        return Redirect('Soportes')->with('success', 'Soporte created successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        Soportes::find($id)->delete();

        return Redirect::route('Soportes.index')
            ->with('success', 'Soporte deleted successfully');
    }
}
