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
use App\Models\Ips;
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
          
          $buscar = $request->search;
                
        $ListadoGeneral = Ips::search(request('search'))->orderBy('id','asc')->paginate(10);
          // $ListadoGeneral = ips::select('ips.user_id','ips.ip_escuela','ips.ip_ministerio','ips.Observacion','users.id','users.ip_equipo')->join('users','ips.user_id','=','users.id')->paginate(10);
        $User = new User();

        $ListadoIpPB = Listadoips::where('departamento_id','<=',21)->orderBy('id','asc')->paginate();
        $ListadoIpP1 = Listadoips::where('departamento_id','>=',21)->where('departamento_id','<=',31)->orderBy('id','asc')->paginate();
        $ListadoIpP2YP3 = Listadoips::where('departamento_id','>',31)->orderBy('id','asc')->paginate();

        return view('Listado.ListadoIp.index', compact('User','ListadoGeneral','ListadoIpPB','ListadoIpP1','ListadoIpP2YP3'))
            ->with('PB', ($request->input('page', 1) - 1) * $ListadoIpPB->perPage())->with('P1', ($request->input('page', 1) - 1) * $ListadoIpP1->perPage())->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoIpP2YP3->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createGeneral(): View
    {
        $ListaIp = new Ips();

        return view('Listado.ListadoIp.General.create', compact('ListaIp'));
    }


    public function storeGeneral(Request $request): RedirectResponse
     {
          $id = Ips::orderBy('id', 'desc')->first();
          $ultimoId = $id->id;
          $ListaIp = new Ips();
          $ListaIp->id =  $ultimoId+1 ;
          $ListaIp->ip_escuela = $request->ip_escuela;
          $ListaIp->ip_ministerio = $request->ip_ministerio;
          $ListaIp->Observacion   = $request->Observaciones;
          $ListaIp->save();
          

           return redirect('ListadoIp')->with('success', 'Listado de Ip created successfully.');
         

    }


    public function CreatePB(): View
    {
        $ListaIp = new Listadoips();
        $Departamentos = Departamentos::where('piso_id','=',1)->get();
         $machineName = gethostname();
       return view('Listado.ListadoIp.PB.createPB',compact('Departamentos','machineName','ListaIp'));


    }

     public function CreateP1(): View
    {
         $ListaIp = new Listadoips();
         $Departamentos = Departamentos::where('piso_id','=',2)->get();
         $machineName = gethostname();
       return view('Listado.ListadoIp.P1.createP1',compact('Departamentos','machineName','ListaIp'));

    }

      public function CreateP2YP3(): View
    {
        $ListaIp = new Listadoips();
        $Departamentos = Departamentos::where('piso_id','=',3)->orwhere('piso_id','=',4)->get();
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
        $ListadoIpPB = Listadoips::paginate(1000);

        return view('Listado.ListadoIp.show', compact('ListadoIpPB','Listado'))->with('PB', ($request->input('page', 1) - 1) * $ListadoIpPB->perPage());
    }


    public function showP1(Request $request,$id): View
    {
        $Listado = Listadoips::FindOrFail($id);
        $ListadoIpP1 = Listadoips::paginate(1000);

        return view('Listado.ListadoIp.P1.show', compact('ListadoIpP1','Listado'))->with('P1', ($request->input('page', 1) - 1) * $ListadoIpP1->perPage());
    }


    public function showP2YP3(Request $request,$id): View
    {
        $Listado = Listadoips::FindOrFail($id);
        $ListadoIpP2YP3 = Listadoips::paginate(1000);

        return view('Listado.ListadoIp.P2YP3.show', compact('ListadoIpP2YP3','Listado'))->with('P2YP3', ($request->input('page', 1) - 1) * $ListadoIpP2YP3->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function editPB($id): View
    {
        $ListaIp = Listadoips::FindOrFail($id);
        $Departamentos = Departamentos::where('piso_id','=',1)->get();
        return view('Listado.ListadoIp.PB.editPB', compact('ListaIp','Departamentos'));
    }

    public function editP1($id): View
    {
          $ListaIp = Listadoips::FindOrFail($id);
          $Departamentos =Departamentos::where('piso_id','=',2)->get();
        return view('Listado.ListadoIp.P1.editP1', compact('ListaIp','Departamentos'));
    }

    public function editP2YP3($id): View
    {
        $ListaIp = Listadoips::FindOrFail($id);
        $Departamentos = Departamentos::where('piso_id','=',3)->orwhere('piso_id','=',4)->get();
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


   public function depatamentoUser(Request $request){

        if($request->ajax()){

            $Departamento = User::where('departamento_id',$request->departamento_id)->get();

            // foreach($Departamento as $dep){

            //   $deparray[$dep->id] = $dep->departamento_id;

            // }


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
