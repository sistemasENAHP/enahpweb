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
use App\Models\MarcaEquipos;
use App\Models\User;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;

class ListadoEquipoController extends Controller
{

    // public function __construct()
    // {
    //     // los middleware donde protegera la ruta
    //     $this->middleware('can:admin.listado.listadoEquipos.index')->only('index');
    //     $this->middleware('can:admin.listado.listadoEquipos.create')->only('create', 'store', 'destroy');
    //     $this->middleware('can:admin.listado.listadoEquipos.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.listado.listadoEquipos.destroy')->only('destroy');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $ListadoEquipoPB = Equipos::where('piso_id','=',1)->where('departamento_id','<=',21)->paginate();
       $ListadoEquipoP1 = Equipos::where('piso_id','=',2)->where('departamento_id','>=',22)->where('departamento_id','<=',31)->paginate();
       $ListadoEquipoP2YP3 = Equipos::where('piso_id','=',3)->where('departamento_id','>=',30)->paginate();




        return view('Listado.ListadoEquipos.index', compact('ListadoEquipoPB','ListadoEquipoP1','ListadoEquipoP2YP3'))->with('PB', ($request->input('page', 1) - 1) * $ListadoEquipoPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoEquipoP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoEquipoP2YP3->perPage());

    }

    /**
     * Show the form for creating a new resource.
     */

    public function CreatePB(Request $request)
    {
            $ListadoEquipo = new Equipos();
            $Departamentos = Departamentos::where('piso_id','=',1)->get();
            $machineName = gethostname();
            // $sistema = php_uname('m'); // Obtiene la máquina
            //   dd($sistema);
            // $Marca = MarcaEquipos::all();
            return view('Listado.ListadoEquipos.PB.createPB',compact('Departamentos','machineName','ListadoEquipo'));

    }

    public function CreateP1(Request $request){

        $ListadoEquipo = new Equipos();
        $Departamentos = Departamentos::where('piso_id','=',2)->get();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P1.createP1',compact('Departamentos','machineName','ListadoEquipo'));



    }


    public function CreateP2YP3(Request $request){

        $ListadoEquipo = new Equipos();
        $Departamentos = Departamentos::where('piso_id','=',3)->orwhere('piso_id','=',4)->get();
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
          $ListadoEquipo->bits = $request->bits;
          $ListadoEquipo->Version = $request->Version;
          $ListadoEquipo->ip_escuela = $request->ip_escuela;
          $ListadoEquipo->ip_ministerio = $request->ip_ministerio;
          $ListadoEquipo->Mouse = $request->Mouse;
          $ListadoEquipo->Teclado = $request->Teclado;
          $ListadoEquipo->Corneta = $request->Corneta;
          $ListadoEquipo->Regulador = $request->Regulador;
          $ListadoEquipo->DiscoDuroGB = $request->discoduro;
          $ListadoEquipo->MemoriaRam = $request->memoria_ram;
          $ListadoEquipo->MacAdress = $request->mac;
          $ListadoEquipo->Proxy = $request->Proxy;
          $ListadoEquipo->Dns = $request->Dns;
          $ListadoEquipo->Puerto = $request->Puerto;
         $ListadoEquipo->CableCorriente = $request->CableCorriente;
          $ListadoEquipo->CableVGAHDMI = $request->CableVGAHDMI;
          $ListadoEquipo->Impresora = $request->Impresora;
          $ListadoEquipo->Telefono = $request->Telefono;
          $ListadoEquipo->Route = $request->Route;
          $ListadoEquipo->PuntoRed = $request->punto_red;
          $ListadoEquipo->CajetinPuntos = $request->CajetinPuntos;
          $ListadoEquipo->Observacion = $request->Observaciones;
          $ListadoEquipo->CasoEspeciales = $request->caso_especiales;
          $ListadoEquipo->save();

       return Redirect('ListadoEquipo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
            $ListadoEquipo =  Equipos::find($id);
            $ListadoEquipoPB = Equipos::paginate();
            return view('Listado.ListadoEquipos.show',compact('ListadoEquipoPB','ListadoEquipo'))->with('PB', ($request->input('page', 1) - 1) * $ListadoEquipoPB->perPage());
    }

      public function ShowP1(Request $request,$id){


             $ListadoEquipo =  Equipos::find($id);
            $ListadoEquipoP1 = Equipos::paginate();
            return view('Listado.ListadoEquipos.P1.show',compact('ListadoEquipoP1','ListadoEquipo'))->with('P1', ($request->input('page', 1) - 1) * $ListadoEquipoP1->perPage());


                           }

    public function ShowP2YP3(Request $request,$id){


          $ListadoEquipo =  Equipos::find($id);
            $ListadoEquipoP2YP3 = Equipos::paginate();
            return view('Listado.ListadoEquipos.P2YP3.show',compact('ListadoEquipoP2YP3','ListadoEquipo'))->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoEquipoP2YP3->perPage());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPB(string $id)
    {
           $ListadoEquipo =  Equipos::find($id);
           $Departamentos = Departamentos::where('piso_id','=',1)->get();
            $machineName = gethostname();
            return view('Listado.ListadoEquipos.PB.editPB',compact('Departamentos','machineName','ListadoEquipo'));
    }

    public function editP1(string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        $Departamentos = Departamentos::where('piso_id','=',2)->get();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P1.editP1',compact('Departamentos','machineName','ListadoEquipo'));
    }

    public function editP2YP3(string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        $Departamentos = Departamentos::where('piso_id','=',3)->orwhere('piso_id','=',4)->get();
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
            $ListadoEquipo->bits = $request->bits;
            $ListadoEquipo->Version = $request->Version;
            $ListadoEquipo->ip_escuela = $request->ip_escuela;
            $ListadoEquipo->ip_ministerio = $request->ip_ministerio;
            $ListadoEquipo->Mouse = $request->Mouse;
            $ListadoEquipo->Teclado = $request->Teclado;
            $ListadoEquipo->Corneta = $request->Corneta;
            $ListadoEquipo->Regulador = $request->Regulador;
            $ListadoEquipo->DiscoDuroGB = $request->discoduro;
            $ListadoEquipo->MemoriaRam = $request->memoria_ram;
            $ListadoEquipo->MacAdress = $request->mac;
            $ListadoEquipo->Proxy = $request->Proxy;
            $ListadoEquipo->Dns = $request->Dns;
            $ListadoEquipo->Puerto = $request->Puerto;
            $ListadoEquipo->CableCorriente = $request->CableCorriente;
            $ListadoEquipo->CableVGAHDMI = $request->CableVGAHDMI;
            $ListadoEquipo->Impresora = $request->Impresora;
            $ListadoEquipo->Telefono = $request->Telefono;
            $ListadoEquipo->Route = $request->Route;
            $ListadoEquipo->PuntoRed = $request->punto_red;
            $ListadoEquipo->CajetinPuntos = $request->CajetinPuntos;
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
        Equipos::find($id)->delete();

        return Redirect('ListadoEquipo')
            ->with('success', 'ListadoEquipos deleted successfully');
    }

    public function depatamentoUser(Request $request){

        if($request->ajax()){

            $Departamento = User::where('departamento_id',$request->departamento_id)->get();


            return response()->json($Departamento);

}
      }



      public function ListadoFuncionarios(Request $request){

        if($request->ajax()){

         $Funcionario = User::select('*')->where('id',$request->dep)->get();


         foreach($Funcionario as $fun){

          // $fun->name;

         }


         return response()->json($fun);



        }


      }



}
