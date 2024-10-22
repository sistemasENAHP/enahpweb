<?php

namespace App\Http\Controllers;

use App\Models\Listadoips;
use App\Models\Soporte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SoporteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Models\TipoFallas;
use App\Models\Equipos;
use App\Models\User;
use App\Models\ips;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use App\Models\Impresoras;
use App\Models\Pisos;
class ImpresorasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $ListadoGeneral = Impresoras::search(request('search'))->orderBy('id','asc')->paginate(10);
        $ListadoGeneralImpresora = Impresoras::search(request('search'))->orderBy('id','asc')->paginate(10);
        $ListadoImpresoraPB = Impresoras::join('users','impresoras.user_id','=','users.id')->where('users.departamento_id','<=',21)->orderBy('impresoras.id','asc')->paginate();
        $ListadoImpresoraIpP1 = Impresoras::join('users','impresoras.user_id','=','users.id')->where('users.departamento_id','>=',21)->where('users.departamento_id','<=',31)->orderBy('impresoras.id','asc')->paginate();
        $ListadoImpresoraIpP2YP3 = Impresoras::join('users','impresoras.user_id','=','users.id')->where('users.departamento_id','>',31)->orderBy('impresoras.id','asc')->paginate();

        return view('Listado.ListadoImpresora.index', compact('ListadoGeneralImpresora','ListadoImpresoraPB','ListadoImpresoraIpP1','ListadoImpresoraIpP2YP3'))
            ->with('PB', ($request->input('page', 1) - 1) * $ListadoImpresoraPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoImpresoraIpP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoImpresoraIpP2YP3->perPage());
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $ListadoImpresora = new Impresoras();
        $Departamentos = Departamentos::all();
        $Pisos = Pisos::all();
        $Ip = ips::all();
        $User = User::all();
        
        return view('Listado.ListadoImpresora.General.create',compact('ListadoImpresora','Departamentos','Pisos','Ip','User'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Users = User::all();
        $Impresora = new Impresoras();
        $Impresora->departamento_id = $request->departamento_id;
        $Impresora->piso_id = $request->id_piso;
        $Impresora->user_id = $request->user_id;
        $Impresora->Equipo = $request->equipo;
        $Impresora->ip_equipo = $request->ip_equipo;
        $Impresora->Marca = $request->Marca;
        $Impresora->Modelo = $request->Modelo;
        $Impresora->Root = $request->Root;
        $Impresora->Clave = $request->Clave;
        $Impresora->save();


        return Redirect('/ListadoImpresora')->with('status','Se ha Registrado Exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ListadoImpresora = Impresoras::Find($id);
        $Departamentos = Departamentos::all();
        $Pisos = Pisos::all();
        $Ip = ips::all();
        $User = User::all();

        return view('Listado.ListadoImpresora.General.edit',compact('ListadoImpresora','Departamentos','Pisos','Ip','User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Users = User::all();
        $Impresora = Impresoras::Find($id);
        $Impresora->departamento_id = $request->departamento_id;
        $Impresora->piso_id = $request->id_piso;
        $Impresora->user_id = $request->user_id;
        $Impresora->Equipo = $request->equipo;
        $Impresora->ip_equipo = $request->ip_equipo;
        $Impresora->Marca = $request->Marca;
        $Impresora->Modelo = $request->Modelo;
        $Impresora->Root = $request->Root;
        $Impresora->Clave = $request->Clave;
        $Impresora->update();

         return Redirect('/ListadoImpresora')->with('status','Se ha Registrado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
