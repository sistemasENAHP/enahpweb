<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SoporteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Models\TipoFallas;
use App\Models\Equipos;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
class ListadoEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $ListadoEquipoPB = Equipos::where('piso_id','=',1)->where('departamento_id','<=',21)->paginate();
       $ListadoEquipoP1 = Equipos::where('piso_id','=',2)->where('departamento_id','>=',22)->where('departamento_id','<=',31)->paginate();
       $ListadoEquipoP2YP3 = Equipos::where('piso_id','=',3)->where('departamento_id','>',31)->paginate();




        return view('Listado.ListadoEquipos.index', compact('ListadoEquipoPB','ListadoEquipoP1','ListadoEquipoP2YP3'))->with('PB', ($request->input('page', 1) - 1) * $ListadoEquipoPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoEquipoP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoEquipoP2YP3->perPage());

    }

    /**
     * Show the form for creating a new resource.
     */

    public function CreatePB(Request $request)
    {
            $ListadoEquipo = new Equipos();
            $Departamentos = Departamentos::all();
            $machineName = gethostname();
            return view('Listado.ListadoEquipos.PB.createPB',compact('Departamentos','machineName','ListadoEquipo'));

    }

    public function CreateP1(Request $request){
        $ListadoEquipo = new Equipos();
        $Departamentos = Departamentos::all();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P1.createP1',compact('Departamentos','machineName','ListadoEquipo'));



    }


    public function CreateP2YP3(Request $request){
        $ListadoEquipo = new Equipos();
        $Departamentos = Departamentos::all();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P2YP3.createP2YP3',compact('Departamentos','machineName','ListadoEquipo'));



    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

          $ListadoEquipo = new Equipos();

         if( $request->piso_idPB == 1){

          $ListadoEquipo->piso_id = $request->piso_idPB;

          }else if($request->piso_idP1 == 2){

            $ListadoEquipo->piso_id = $request->piso_idP1;

          }else if($request->piso_idP2YP3 == 3){

            $ListadoEquipo->piso_id = $request->piso_idP2YP3;

          }
          $ListadoEquipo->departamento_id = $request->departamento_id;
          $ListadoEquipo->Nombre = $request->Nombre;
          $ListadoEquipo->Apellidos = $request->Apellidos;
          $ListadoEquipo->Cedula = $request->Cedula;
          $ListadoEquipo->Equipo = $request->Equipo;
          $ListadoEquipo->Nombre_Equipo = $request->NombreEquipo;
          $ListadoEquipo->Marca = $request->marca_equipo;
          $ListadoEquipo->Cantidad_Equipo = $request->cantidad_Equipo;
          $ListadoEquipo->Sistema_Operativo= $request->sistema_operativo;
          $ListadoEquipo->Version = $request->Version;
          $ListadoEquipo->Mouse = $request->Mouse;
          $ListadoEquipo->Teclado = $request->Teclado;
          $ListadoEquipo->Corneta = $request->Corneta;
          $ListadoEquipo->Regulador = $request->Regulador;
          $ListadoEquipo->DiscoDuroGB = $request->discoduro;
          $ListadoEquipo->MacAdress = $request->mac;
          $ListadoEquipo->ip_escuela = $request->ip_escuela;
          $ListadoEquipo->ip_ministerio = $request->ip_ministerio;
          $ListadoEquipo->ProxyDns = $request->proxy_dns;
          $ListadoEquipo->PuntoRed = $request->punto_red;
          $ListadoEquipo->Observacion = $request->Observaciones;
          $ListadoEquipo->CasoEspeciales = $request->caso_especiales;
          $ListadoEquipo->save();

       return Redirect('ListadoEquipo');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $ListadoEquipo =  Equipos::find($id);
            $Departamentos = Departamentos::all();
            $machineName = gethostname();
            return view('Listado.ListadoEquipos.show',compact('Departamentos','machineName','ListadoEquipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPB(string $id)
    {
           $ListadoEquipo =  Equipos::find($id);
            $Departamentos = Departamentos::all();
            $machineName = gethostname();
            return view('Listado.ListadoEquipos.PB.editPB',compact('Departamentos','machineName','ListadoEquipo'));
    }

    public function editP1(string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        $Departamentos = Departamentos::all();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P1.editP1',compact('Departamentos','machineName','ListadoEquipo'));
    }

    public function editP2YP3(string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        $Departamentos = Departamentos::all();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P2YP3.editP2YP3',compact('Departamentos','machineName','ListadoEquipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        if( $request->piso_idPB == 1){

            $ListadoEquipo->piso_id = $request->piso_idPB;

            }else if($request->piso_idP1 == 2){

              $ListadoEquipo->piso_id = $request->piso_idP1;

            }else if($request->piso_idP2YP3 == 3){

              $ListadoEquipo->piso_id = $request->piso_idP2YP3;

            }
            $ListadoEquipo->departamento_id = $request->departamento_id;
            $ListadoEquipo->Nombre = $request->Nombre;
            $ListadoEquipo->Apellidos = $request->Apellidos;
            $ListadoEquipo->Cedula = $request->Cedula;
            $ListadoEquipo->Equipo = $request->Equipo;
            $ListadoEquipo->Nombre_Equipo = $request->NombreEquipo;
            $ListadoEquipo->Marca = $request->marca_equipo;
            $ListadoEquipo->Cantidad_Equipo = $request->cantidad_Equipo;
            $ListadoEquipo->Sistema_Operativo= $request->sistema_operativo;
            $ListadoEquipo->Version = $request->Version;
            $ListadoEquipo->Mouse = $request->Mouse;
            $ListadoEquipo->Teclado = $request->Teclado;
            $ListadoEquipo->Corneta = $request->Corneta;
            $ListadoEquipo->Regulador = $request->Regulador;
            $ListadoEquipo->DiscoDuroGB = $request->discoduro;
            $ListadoEquipo->MacAdress = $request->mac;
            $ListadoEquipo->ip_escuela = $request->ip_escuela;
            $ListadoEquipo->ip_ministerio = $request->ip_ministerio;
            $ListadoEquipo->ProxyDns = $request->proxy_dns;
            $ListadoEquipo->PuntoRed = $request->punto_red;
            $ListadoEquipo->Observacion = $request->Observaciones;
            $ListadoEquipo->CasoEspeciales = $request->caso_especiales;
            $ListadoEquipo->update();

            return Redirect('ListadoEquipo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



}
