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
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function index(Request $request){

         $Soporte = Soportes::all();


        return view('dashboard',compact('Soporte'));

   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Notificacion = new  Notificacions();
          $Notificacion->Asuntos = $request->Asuntos;
          $Notificacion->Descripcion = $request->Descripcion;
          $Notificacion->save();
          dd($Notificacion);

 
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
