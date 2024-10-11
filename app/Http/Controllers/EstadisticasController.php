<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Soportes;
use Carbon\Carbon; 
class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Highcharts (Request $request){

       $departamentos = DB::table('soportes')->join('departamentos','soportes.departamento_id','=','departamentos.id')->select('soportes.departamento_id','departamentos.Departamento',DB::raw('count(*) as departamento_id'))->groupBy('soportes.departamento_id','departamentos.Departamento')->orderBy('soportes.departamento_id','asc')->get();


       $Tecnico = DB::table('soportes')->select('Tecnico',DB::raw('count(*) as id'))->groupBy('Tecnico')->orderBy('id','asc')->where('id','>=','1')->get();

       $Usuarios = DB::table('soportes')->select('Nombre','Apellidos',DB::raw('count(*) as id'))->groupBy('Nombre','Apellidos')->orderBy('id','asc')->where('id','>=','1')->get();




        $ConsultAño= DB::table('soportes')->select(DB::raw('COUNT(*) as count'))->groupBy(DB::raw("extract(YEAR FROM created_at)"))->pluck('count');

    $CAños = DB::table('soportes')->select(DB::raw('extract(YEAR FROM created_at) as anio'),DB::raw('count(*) as id'))
    ->groupBy(DB::raw('extract(YEAR FROM created_at)'))->OrderBy('id','desc')->get();

    $CMes = Soportes::select(DB::raw('extract(month from created_at) as month'),DB::raw('COUNT(1) as id'))->groupBy('month')->OrderBy('id','desc')->get();


        $ConsultaMes = soportes::select(DB::raw('extract(month from created_at) as month'),DB::raw('COUNT(1) as count'))->groupBy('month')->get()->toArray();


$Meses = [];

foreach($ConsultaMes as $consultaxmes){

$Meses = Carbon::createFromFormat('m',$consultaxmes['month'])->isoFormat('MMMM');

}
    $counts = array_fill(0,12,0);
     foreach($ConsultaMes as $consultames){


          $index = $consultames['month']-1;
          $counts[$index] = $consultames['count'];

     }


$departamento = [];
$departamento1 = [];
$tecnico = [];
$tecnico1 = [];
$Usuario = [];
$Usuario1 = [];
foreach($departamentos as $dep){

    $departamento[]= ['name' => $dep->Departamento,'y' => $dep->departamento_id];
    $departamento1[] = $dep->Departamento;
}

foreach($Tecnico as $tec){
if($tec->Tecnico == ''){
   $tecnico[]= ['name' => 'Disponible','y' => $tec->id]; 

}else{

$tecnico[]= ['name' => $tec->Tecnico,'y' => $tec->id];
$tecnico1[] = $tec->Tecnico;

}
}


foreach($Usuarios as $user){

$Usuario[] = ['name' => $user->Nombre,'y' => $user->id];
$Usuario1[] = $user->Nombre.''.$user->Apellidos;

}



            return view('Estadisticas.index',compact('ConsultAño','counts','CAños','CMes','ConsultaMes','Meses','departamentos','Tecnico','Usuarios'),["data" =>json_encode($departamento),"dataa" =>json_encode($departamento1),"data1"=>json_encode($tecnico),'dataa1'=>json_encode($tecnico1),'Usuario'=>json_encode($Usuario),'Usuario1'=>json_encode($Usuario1)]);

    }
}
