<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListadoRouter;
use App\Models\Departamentos;
use App\Models\Pisos;
use App\Models\User;
class ListadoRouterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Router = ListadoRouter::search(request('search'))->paginate();
        return view('Listado.ListadoRouter.index',compact('Router'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Router = new  ListadoRouter();
        $Departamentos = Departamentos::all();
        $Pisos = Pisos::all();
        $User = User::all();
        return view('Listado.ListadoRouter.General.create',compact('Router','Departamentos','Pisos','User'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         $Router = new  ListadoRouter();
          $Router->piso_id = $request->id_piso;
          $Router->departamento_id = $request->departamento_id;
          $Router->user_id = $request->user_id;
          $Router->Equipo = $request->Equipo;
          $Router->Nombre_Wifi = $request->Nombre_Wifi;
          $Router->Clave_Wifi = $request->Clave_Wifi;
          $Router->Usuario_Root = $request->Usuario_Root;
          $Router->Clave_Root = $request->Clave_Root;
           $Router->ip_acceso = $request->ip_acceso;
           $Router->ip_route = $request->ip_route;
             $Router->Punto_Red = $request->Punto_Red;
              $Router->Observacion = $request->Observaciones;
              $Router->save();

              return redirect('/ListadoRouter');

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
        $Router = ListadoRouter::find($id);
        $Departamentos = Departamentos::all();
        $Pisos = Pisos::all();
        $User = User::all();
        return view('Listado.ListadoRouter.General.edit',compact('Router','Departamentos','Pisos','User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $Router =ListadoRouter::find($id);
          $Router->piso_id = $request->id_piso;
          $Router->departamento_id = $request->departamento_id;
          $Router->user_id = $request->user_id;
          $Router->Equipo = $request->Equipo;
          $Router->Nombre_Wifi = $request->Nombre_Wifi;
          $Router->Clave_Wifi = $request->Clave_Wifi;
          $Router->Usuario_Root = $request->Usuario_Root;
          $Router->Clave_Root = $request->Clave_Root;
           $Router->ip_acceso = $request->ip_acceso;
           $Router->ip_route = $request->ip_route;
             $Router->Punto_Red = $request->Punto_Red;
              $Router->Observacion = $request->Observaciones;
              $Router->update();

              return redirect('/ListadoRouter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $Router = ListadoRouter::find($id);
        $Router->delete();

         return redirect('/ListadoRouter');
    }
}
