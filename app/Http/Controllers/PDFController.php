<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\soportes;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
use App\Models\Equipos;
class PDFController extends Controller
{
    public function EstadisticaPDF(Request $request){

             $Opciones = $request->opciones;

             if($Opciones == 1){

             $Tecnico = DB::table('soportes')->select('Tecnico',DB::raw('count(*) as id'))->groupBy('Tecnico')->orderBy('id','asc')->where('id','>=','1')->get();
                
              $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.EstadisticaPDF.TecnicoPDF', \compact('Tecnico'), ["data" => json_encode($Tecnico)]);
            // $pdf->setOptions('enable-javascript', true);
              return $pdf->stream();
             
             }elseif ($Opciones == "2") {

                 $Usuarios = DB::table('soportes')->select('Nombre','Apellidos',DB::raw('count(*) as id'))->groupBy('Nombre','Apellidos')->orderBy('id','asc')->where('id','>=','1')->get();

                  $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.EstadisticaPDF.UsuarioPDF', \compact('Usuarios'), ["data" => json_encode($Usuarios)]);

                   return $pdf->stream();

             }elseif($Opciones == '3'){

                $departamentos = DB::table('soportes')->join('departamentos','soportes.departamento_id','=','departamentos.id')->select('soportes.departamento_id','departamentos.Departamento',DB::raw('count(*) as departamento_id'))->groupBy('soportes.departamento_id','departamentos.Departamento')->orderBy('soportes.departamento_id','asc')->get();

                $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.EstadisticaPDF.DepartamentoPDF', \compact('departamentos'), ["data" => json_encode($departamentos)]);

                   return $pdf->stream();



             }elseif($Opciones == '4'){

                $CMes = soportes::select(DB::raw('extract(month from created_at) as month'),DB::raw('COUNT(1) as id'))->groupBy('month')->OrderBy('id','desc')->get();
                foreach($CMes as $consultaxmes){

                   $Meses = Carbon::createFromFormat('m',$consultaxmes['month'])->isoFormat('MMMM');

}

                 $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.EstadisticaPDF.ConsultaxMesPDF', \compact('CMes','Meses'), ["data" => json_encode($CMes)]);

                   return $pdf->stream();


             }elseif($Opciones == '5'){



                  $CAños = DB::table('soportes')->select(DB::raw('extract(YEAR FROM created_at) as anio'),DB::raw('count(*) as id'))->groupBy(DB::raw('extract(YEAR FROM created_at)'))->OrderBy('id','desc')->get();

                   $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.EstadisticaPDF.ConsultaxAñoPDF', \compact('CAños'), ["data" => json_encode($CAños)]);

                   return $pdf->stream();



            }

    }



    public function ReporteEquiposTerminado(Request $request,$id){
            
            $EquipoT = soportes::FindOrFail($id);
          

          $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.Tecnico.EquiposTerminadoPDF',compact('EquipoT'));

                   return $pdf->stream();

    }


    public function ListadoEquipo(Request $request){


       $Pb = $request->PB;
       $P1 = $request->P1;
       $P2YP3 = $request->P2YP3;

       if($Pb == '1'){
       
        $ListadoEquipoPB = Equipos::where('piso_id','=',$Pb)->get();
         $ListadoEquipo =  Equipos::find(2);
        $pdf = Pdf::setPaper('A4', 'landscape')->loadView('PDF.Listado.ListadoEquipo.PB',compact('ListadoEquipoPB','ListadoEquipo'));

         return $pdf->stream();

      }elseif($P1 == '2'){

      $ListadoEquiposP1 = Equipos::where('piso_id','=',$P1);
       $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.Listado.ListadoEquipo.P1',compact('ListadoEquiposP1'));

         return $pdf->stream();


      }elseif($P2YP3 == '3'){


        $ListadoEquiposP2YP3 = Equipos::where('piso_id','=',$P2YP3);
         $pdf = Pdf::setPaper('A4', 'portrait')->loadView('PDF.Listado.ListadoEquipo.P2YP3',compact('ListadoEquiposP2YP3'));

         return $pdf->stream();


      }
       


    }

}
