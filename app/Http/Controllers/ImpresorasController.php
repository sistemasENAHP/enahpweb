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
        $ListadoGeneral = Impresoras::all();
        $ListadoIpPB = Impresoras::where('departamento_id','<=',21)->orderBy('id','asc')->paginate();
        $ListadoIpP1 = Impresoras::where('departamento_id','>=',21)->where('departamento_id','<=',31)->orderBy('id','asc')->paginate();
        $ListadoIpP2YP3 = Impresoras::where('departamento_id','>',31)->orderBy('id','asc')->paginate();

        return view('Listado.ListadoImpresora.index', compact('ListadoGeneral','ListadoIpPB','ListadoIpP1','ListadoIpP2YP3'))
            ->with('PB', ($request->input('page', 1) - 1) * $ListadoIpPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoIpP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoIpP2YP3->perPage());
        
        
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
        
        return view('Listado.ListadoImpresora.General.create',compact('ListadoImpresora','Departamentos','Pisos','Ip'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
