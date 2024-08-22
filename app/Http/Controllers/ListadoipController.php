<?php

namespace App\Http\Controllers;

use App\Models\Listadoips;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ListadoipsRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Models\TipoFallas;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
class ListadoipController extends Controller
{

    // public function __construct()
    // {
    //     // los middleware donde protegera la ruta
    //     $this->middleware('can:admin.listado.ListadoIp.index')->only('index');
    //     $this->middleware('can:admin.listado.ListadoIp.create')->only('create', 'store', 'destroy');
    //     $this->middleware('can:admin.listado.ListadoIp.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.listado.ListadoIp.destroy')->only('destroy');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ListadoIpPB = Listadoips::where('piso_id','=',1)->where('departamento_id','<=',21)->orderBy('id','asc')->paginate();
        $ListadoIpP1 = Listadoips::where('piso_id','=',2)->where('departamento_id','>=',22)->where('departamento_id','<=',31)->orderBy('id','asc')->paginate();
        $ListadoIpP2YP3 = Listadoips::where('piso_id','=',3)->where('departamento_id','>',31)->orderBy('id','asc')->paginate();

        return view('Listado.ListadoIp.index', compact('ListadoIpPB','ListadoIpP1','ListadoIpP2YP3'))
            ->with('PB', ($request->input('page', 1) - 1) * $ListadoIpPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoIpP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoIpP2YP3->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ListaIp = new Listadoips();

        return view('Listado.ListadoIp.create', compact('ListaIp'));
    }


    public function CreatePB(): View
    {
        $ListaIp = new Listadoips();
        $Departamentos = Departamentos::all();
         $machineName = gethostname();
       return view('Listado.ListadoIp.PB.createPB',compact('Departamentos','machineName','ListaIp'));


    }

     public function CreateP1(): View
    {
         $ListaIp = new Listadoips();
         $Departamentos = Departamentos::all();
         $machineName = gethostname();
       return view('Listado.ListadoIp.P1.createP1',compact('Departamentos','machineName','ListaIp'));

    }

      public function CreateP2YP3(): View
    {
        $ListaIp = new Listadoips();
        $Departamentos = Departamentos::all();
         $machineName = gethostname();

       return view('Listado.ListadoIp.P2YP3.createP2YP3',compact('Departamentos','machineName','ListaIp'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Listadoips::create($request->validated());


        $ListaIp = new Listadoips();

        if( $request->piso_idPB == 1){

            $ListaIp->piso_id = $request->piso_idPB;

            }else if($request->piso_idP1 == 2){

              $ListaIp->piso_id = $request->piso_idP1;

            }else if($request->piso_idP2YP3 == 3){

              $ListaIp->piso_id = $request->piso_idP2YP3;

            }
            $ListaIp->departamento_id = $request->departamento_id;
            $ListaIp->Nombre = $request->Nombre;
            $ListaIp->Apellido = $request->Apellidos;
            $ListaIp->Cedula = $request->Cedula;
            $ListaIp->Equipo = $request->Equipo;
            $ListaIp->Escuela = $request->ip_escuela;
            $ListaIp->Ministerio = $request->ip_ministerio;
            $ListaIp->Observacion = $request->Observaciones;
             $ListaIp->save();

        return redirect('ListadoIp')->with('success', 'Listado de Ip created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id): View
    {
        $Listado = Listadoips::FindOrFail($id);
        $ListadoIpP1 = Listadoips::paginate(1000);

        return view('Listado.ListadoIp.show', compact('ListadoIpP1','Listado'))->with('P1', ($request->input('page', 1) - 1) * $ListadoIpP1->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function editPB($id): View
    {
        $ListaIp = Listadoips::FindOrFail($id);
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoIp.PB.editPB', compact('ListaIp','Departamentos'));
    }

    public function editP1($id): View
    {
          $ListaIp = Listadoips::FindOrFail($id);
          $Departamentos = Departamentos::all();
        return view('Listado.ListadoIp.P1.editP1', compact('ListaIp','Departamentos'));
    }

    public function editP2YP3($id): View
    {
        $ListaIp = Listadoips::FindOrFail($id);
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoIp.P2YP3.editP2YP3', compact('ListaIp','Departamentos'));
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $ListaIp = Listadoips::FindOrFail($id);

        if( $request->piso_idPB == 1){

            $ListaIp->piso_id = $request->piso_idPB;

            }else if($request->piso_idP1 == 2){

              $ListaIp->piso_id = $request->piso_idP1;

            }else if($request->piso_idP2YP3 == 3){

              $ListaIp->piso_id = $request->piso_idP2YP3;

            }
            $ListaIp->departamento_id = $request->departamento_id;
            $ListaIp->Nombre = $request->Nombre;
            $ListaIp->Apellido = $request->Apellidos;
            $ListaIp->Cedula = $request->Cedula;
            $ListaIp->Equipo = $request->Equipo;
            $ListaIp->Escuela = $request->ip_escuela;
            $ListaIp->Ministerio = $request->ip_ministerio;
            $ListaIp->Observacion = $request->Observaciones;
             $ListaIp->update();

             return redirect('ListadoIp')->with('success', 'Listado de Ip created successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        Listadoips::find($id)->delete();

        return Redirect::route('Listado.ListadoIp.index')
            ->with('success', 'Gestionip deleted successfully');
    }
}
