<?php

namespace App\Http\Controllers;

use App\Models\Soportes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SoporteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Departamentos;
use App\Models\TipoFallas;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use App\Models\User;
use App\Notifications\SoporteNotificacion;
use Illuminate\Notifications\Notifiable;
use App\Events\SoporteEvento;
use App\Models\Notificacions;
use App\Events\NotificacionesSistema;
class HomeControler extends Controller
{


   public function index(Request $request){

         $Soporte = Soportes::orderby('id','desc')->get();
         $Notificacion = Notificacions::all();


        return view('dashboard',compact('Soporte','Notificacion'));

   }



   public function store(Request $request){


          $Notificacion = new  Notificacions();
          $Notificacion->Asuntos = $request->Asuntos;
          $Notificacion->Descripcion = $request->Descripcion;
          $Notificacion->save();
          broadcast(new NotificacionesSistema());



        return redirect('/dashboard');

   }


   public function Eliminar($id){

        $notificacion = Notificacions::find($id);
        $notificacion->delete();
        return redirect('/dashboard');

   }

}
