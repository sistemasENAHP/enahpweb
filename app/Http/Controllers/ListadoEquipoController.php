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
use App\Models\Impresoras;
use App\Models\Telefonos;
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
             $Impresoras = new  Impresoras();
               $Telefonos = new Telefonos();
            $machineName = gethostname();
            // $sistema = php_uname('m'); // Obtiene la máquina
            //   dd($sistema);
            // $Marca = MarcaEquipos::all();
            $User = User::all();
            return view('Telefonos','Listado.ListadoEquipos.PB.createPB',compact('Impresoras','User','Departamentos','machineName','ListadoEquipo'));

    }

    public function CreateP1(Request $request){

        $ListadoEquipo = new Equipos();
        $Departamentos = Departamentos::where('piso_id','=',2)->get();
         $Impresoras = new  Impresoras();
           $Telefonos = new Telefonos();
        $machineName = gethostname();
        $User = User::all();
        return view('Listado.ListadoEquipos.P1.createP1',compact('Telefonos','Impresoras','User','Departamentos','machineName','ListadoEquipo'));



    }


    public function CreateP2YP3(Request $request){

        $ListadoEquipo = new Equipos();
         $Impresoras = new  Impresoras();
         $Telefonos = new Telefonos();
        $Departamentos = Departamentos::where('piso_id','=',3)->orwhere('piso_id','=',4)->get();
        $machineName = gethostname();
        $User = User::all();
        return view('Listado.ListadoEquipos.P2YP3.createP2YP3',compact('Telefonos','Impresoras','User','Departamentos','machineName','ListadoEquipo'));



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
          $ListadoEquipo->user_id = $request->dep;
          $ListadoEquipo->Equipo = $request->Equipo;
          $ListadoEquipo->Nombre_Equipo = $request->NombreEquipo;
          $ListadoEquipo->Marca = $request->marca_equipo;
          $ListadoEquipo->Cantidad_Equipo = $request->cantidad_Equipo;
          $ListadoEquipo->Sistema_Operativo= $request->sistema_operativo;
          $ListadoEquipo->bits = $request->bits;
          $ListadoEquipo->Version = $request->Version;
          $ListadoEquipo->Edicion = $request->edicion;
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
          $ListadoEquipo->Punto_Switch = $request->punto_switch;
          $ListadoEquipo->CajetinPuntos = $request->CajetinPuntos;
          $ListadoEquipo->Observacion = $request->Observaciones;
          $ListadoEquipo->CasoEspeciales = $request->caso_especiales;
          $ListadoEquipo->save();

            $Users = User::all();
        $Impresora = new Impresoras();
        $Impresora->departamento_id = $request->departamento_id;
          if( $request->piso_idPB == 1){

          $Impresora->piso_id = $request->piso_idPB;

          }else if($request->piso_idP1 == 2){

            $Impresora->piso_id = $request->piso_idP1;

          }else if($request->piso_idP2YP3 == 3){

            $Impresora->piso_id = $request->piso_idP2YP3;

          }
        $Impresora->user_id = $request->dep;
        $Impresora->Equipo = $request->Impresoras;
        $Impresora->tipo_conexion = $request->tipo_conexion;
        $Impresora->ip_equipo = $request->ip_impresora;
        $Impresora->Punto_Red = $request->punto_impresora;
        $Impresora->Marca = $request->Marca;
        $Impresora->Modelo = $request->Modelo;

        $Impresora->save();

        $ListadoTelefono = new Telefonos();
        if( $request->piso_idPB == 1){

          $ListadoTelefono->piso_id = $request->piso_idPB;

          }else if($request->piso_idP1 == 2){

            $ListadoTelefono->piso_id = $request->piso_idP1;

          }else if($request->piso_idP2YP3 == 3){

            $ListadoTelefono->piso_id = $request->piso_idP2YP3;

          }
         $ListadoTelefono->departamento_id = $request->departamento_id;
        $ListadoTelefono->user_id = $request->dep;
        $ListadoTelefono->Equipo = $request->Equipo_Telefono;
        $ListadoTelefono->Extension = $request->Extension;
        $ListadoTelefono->Observacion = $request->Observacion;
        $ListadoTelefono->Punto_Red = $request->punto_telefono;
        $ListadoTelefono->save();

       return Redirect('ListadoEquipo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
            $ListadoEquipo =  Equipos::find($id);
            $ListadoEquipoPB = Equipos::paginate();
            $Impresoras =  Impresoras::find($id);
              $Telefonos =  Telefonos::find($id);
            return view('Listado.ListadoEquipos.show',compact('Telefonos','Impresoras','ListadoEquipoPB','ListadoEquipo'))->with('PB', ($request->input('page', 1) - 1) * $ListadoEquipoPB->perPage());
    }

      public function ShowP1(Request $request,$id){


             $ListadoEquipo =  Equipos::find($id);
            $ListadoEquipoP1 = Equipos::paginate();
              $Telefonos =  Telefonos::find($id);
            return view('Listado.ListadoEquipos.P1.show',compact('Telefonos','ListadoEquipoP1','ListadoEquipo'))->with('P1', ($request->input('page', 1) - 1) * $ListadoEquipoP1->perPage());


                           }

    public function ShowP2YP3(Request $request,$id){


            $ListadoEquipo =  Equipos::find($id);
            $ListadoEquipoP2YP3 = Equipos::paginate();
            $Impresoras =  Impresoras::find($id);
              $Telefonos =  Telefonos::find($id);
            $Impresorass =  Impresoras::all();
            return view('Listado.ListadoEquipos.P2YP3.show',compact('Telefonos','Impresorass','Impresoras','ListadoEquipoP2YP3','ListadoEquipo'))->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoEquipoP2YP3->perPage());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPB(string $id)
    {
           $ListadoEquipo =  Equipos::find($id);
           $Departamentos = Departamentos::where('piso_id','=',1)->get();
           $Impresoras =  Impresoras::find($id);
             $Telefonos =  Telefonos::find($id);
           $User = User::all();
            $machineName = gethostname();
            return view('Listado.ListadoEquipos.PB.editPB',compact('Telefonos','Impresoras','User','Departamentos','machineName','ListadoEquipo'));
    }

    public function editP1(string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        $Departamentos = Departamentos::where('piso_id','=',2)->get();
        $Impresoras =  Impresoras::find($id);
        $Telefonos =  Telefonos::find($id);
        $User = User::all();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P1.editP1',compact('Telefonos','Impresoras','User','Departamentos','machineName','ListadoEquipo'));
    }

    public function editP2YP3(string $id)
    {
        $ListadoEquipo =  Equipos::find($id);
        $Impresoras =  Impresoras::find($id);
        $Telefonos =  Telefonos::find($id);
        $User = User::all();
        $Departamentos = Departamentos::where('piso_id','=',3)->orwhere('piso_id','=',4)->get();
        $machineName = gethostname();
        return view('Listado.ListadoEquipos.P2YP3.editP2YP3',compact('Telefonos','Impresoras','Departamentos','machineName','ListadoEquipo','User'));
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
            $ListadoEquipo->user_id = $request->dep;
            $ListadoEquipo->Equipo = $request->Equipo;
            $ListadoEquipo->Nombre_Equipo = $request->NombreEquipo;
            $ListadoEquipo->Marca = $request->marca_equipo;
            $ListadoEquipo->Cantidad_Equipo = $request->cantidad_Equipo;
            $ListadoEquipo->Sistema_Operativo= $request->sistema_operativo;
            $ListadoEquipo->bits = $request->bits;
            $ListadoEquipo->Version = $request->Version;
            $ListadoEquipo->Edicion = $request->edicion;
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
            $ListadoEquipo->Punto_Switch = $request->punto_switch;
            $ListadoEquipo->CajetinPuntos = $request->CajetinPuntos;
            $ListadoEquipo->Observacion = $request->Observaciones;
            $ListadoEquipo->CasoEspeciales = $request->caso_especiales;
            $ListadoEquipo->update();

                
        $Impresora =  Impresoras::find($id);;
        $Impresora->departamento_id = $request->departamento_id;
          if( $request->piso_idPB == 1){

          $Impresora->piso_id = $request->piso_idPB;

          }else if($request->piso_idP1 == 2){

            $Impresora->piso_id = $request->piso_idP1;

          }else if($request->piso_idP2YP3 == 3){

            $Impresora->piso_id = $request->piso_idP2YP3;

          }
        // $Impresora->piso_id = $request->id_piso;
        $Impresora->user_id = $request->dep;
        $Impresora->Equipo = $request->Impresoras;
        $Impresora->tipo_conexion = $request->tipo_conexion;
        $Impresora->ip_equipo = $request->ip_impresora;
        $Impresora->Punto_Red = $request->punto_impresora;
        $Impresora->Marca = $request->Marca;
        $Impresora->Modelo = $request->Modelo;
        $Impresora->update();

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
