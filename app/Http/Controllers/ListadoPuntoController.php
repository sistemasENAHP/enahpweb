<?php

namespace App\Http\Controllers;
use App\Models\ListadoPuntos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GestionipsRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Models\TipoFallas;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use App\Models\Pisos;
class ListadoPuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) :view
    {
        
           $ListadoPuntoPB = ListadoPuntos::where('piso_id','=',1)->where('departamento_id','<=',21)->orderBy('id','asc')->paginate();
        //        $Mostrar = $request->mostrar;
        //    dd($Mostrar);
           $ListadoPuntoP1 = ListadoPuntos::where('piso_id','=',2)->where('departamento_id','>=',22)->where('departamento_id','<=',31)->orderBy('id','desc')->paginate();
           $ListadoPuntoP2YP3 = ListadoPuntos::where('piso_id','=',3)->where('departamento_id','>',31)->orderBy('id','desc')->paginate();
           $Piso = ListadoPuntos::all();


        return view('Listado.ListadoPuntos.index', compact('ListadoPuntoPB','ListadoPuntoP1','ListadoPuntoP2YP3'))->with('PB', ($request->input('page', 1) - 1) * $ListadoPuntoPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoPuntoP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoPuntoP2YP3->perPage());

    }

    /**
     * Show the form for creating a new resource.
     */

    public function createPB(Request $request)
    {
        $ListadoPunto = new  ListadoPuntos();
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.PB.createPB',compact('Departamentos','ListadoPunto'));
    }

      public function createP1(Request $request)
    {
        $ListadoPunto = new  ListadoPuntos();
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.P1.createP1',compact('Departamentos','ListadoPunto'));
    }

       public function createP2YP3(Request $request)
    {
        $ListadoPunto = new  ListadoPuntos();
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.P2YP3.createP2YP3',compact('Departamentos','ListadoPunto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $ListadoPunto = new ListadoPuntos();

          if( $request->piso_idPB == 1){

          $ListadoPunto->piso_id = $request->piso_idPB;

          }else if($request->piso_idP1 == 2){

            $ListadoPunto->piso_id = $request->piso_idP1;

          }else if($request->piso_idP2YP3 == 3){

            $ListadoPunto->piso_id = $request->piso_idP2YP3;

          }
          $ListadoPunto->departamento_id = $request->departamento_id;
          $ListadoPunto->Nombre = $request->Nombre;
          $ListadoPunto->Apellido = $request->Apellidos;
          $ListadoPunto->Cedula = $request->Cedula;
          $ListadoPunto->Equipo = $request->Equipo;
          $ListadoPunto->Puntos = $request->punto_red;
          $ListadoPunto->PuertoPatch = $request->Puerto_PatchPanel;
          $ListadoPunto->NPuertoSwitch = $request->Puerto_Switch;
          $ListadoPunto->Observacion = $request->Observaciones;
          $ListadoPunto->save();


          return redirect('ListadoPunto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id)
    {
        $Listado = ListadoPuntos::FindOrFail($id);
        $ListadoPuntoPB = ListadoPuntos::paginate();

        return view('Listado.ListadoPuntos.show', compact('ListadoPuntoPB','Listado'))->with('PB', ($request->input('page', 1) - 1) * $ListadoPuntoPB->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ListadoPunto = ListadoPuntos::FindOrFail($id);
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.PB.editPB',compact('Departamentos','ListadoPunto'));
    }

    public function editPB(string $id)
    {
        $ListadoPunto = ListadoPuntos::FindOrFail($id);
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.PB.editPB',compact('Departamentos','ListadoPunto'));

    }

    public function editP1(string $id)
    {
        $ListadoPunto = ListadoPuntos::FindOrFail($id);
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.P1.editP1',compact('Departamentos','ListadoPunto'));

    }

    public function editP2YP3(string $id)
    {
        $ListadoPunto = ListadoPuntos::FindOrFail($id);
        $Departamentos = Departamentos::all();
        return view('Listado.ListadoPuntos.P2YP3.editP2YP3',compact('Departamentos','ListadoPunto'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ListadoPunto = ListadoPuntos::FindOrFail($id);

        if( $request->piso_idPB == 1){

            $ListadoPunto->piso_id = $request->piso_idPB;

            }else if($request->piso_idP1 == 2){

              $ListadoPunto->piso_id = $request->piso_idP1;

            }else if($request->piso_idP2YP3 == 3){

              $ListadoPunto->piso_id = $request->piso_idP2YP3;

            }
          $ListadoPunto->departamento_id = $request->departamento_id;
          $ListadoPunto->Nombre = $request->Nombre;
          $ListadoPunto->Apellido = $request->Apellidos;
          $ListadoPunto->Cedula = $request->Cedula;
          $ListadoPunto->Equipo = $request->Equipo;
          $ListadoPunto->Puntos = $request->punto_red;
          $ListadoPunto->PuertoPatch = $request->Puerto_PatchPanel;
          $ListadoPunto->NPuertoSwitch = $request->Puerto_Switch;
          $ListadoPunto->Observacion = $request->Observaciones;
          $ListadoPunto->update();


          return redirect('ListadoPunto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         ListadoPuntos::FindOrFail($id)->delete();
        return redirect('ListadoPunto');
    }
}
