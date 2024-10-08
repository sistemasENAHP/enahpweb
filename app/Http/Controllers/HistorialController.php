<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soportes;
use App\Models\soportehistorials;

class HistorialController extends Controller
{
   public function HistorialSoporte(Request $request){

       $Cedula = $request->get('search');

        $soportes = soportehistorials::where('Cedula','=',$Cedula)->where('estatus_id','=','4')->OrderBy('id','desc')->get();


        return view('Tecnico.Historial.index', compact('soportes'));


    }


}
