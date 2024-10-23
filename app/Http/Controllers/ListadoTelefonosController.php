<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefonos;
use App\Models\Departamentos;
use App\Models\Pisos;
use App\Models\User;
class ListadoTelefonosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Telefonos = Telefonos::all();
        
       return  view('Listado.ListadoTelefono.index',compact('Telefonos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ListadoTelefono = new Telefonos();
        $Departamentos = Departamentos::all();
        $Pisos = Pisos::all();
        $User = User::all();


        return view('Listado.ListadoTelefono.General.create',compact('User','ListadoTelefono','Departamentos','Pisos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $ListadoTelefono = new Telefonos();
         $ListadoTelefono->departamento_id = $request->departamento_id;
        $ListadoTelefono->piso_id = $request->id_piso;
        $ListadoTelefono->user_id = $request->user_id;
        $ListadoTelefono->Equipo = $request->equipo;
        $ListadoTelefono->Extension = $request->Extesion;
        $ListadoTelefono->Observacion = $request->Observacion;
        $ListadoTelefono->Punto_Red = $request->punto_telefono;
        $ListadoTelefono->save();
        

        return redirect('/ListadoTelefono');
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
         $ListadoTelefono = Telefonos::find($id);
        $Departamentos = Departamentos::all();
        $Pisos = Pisos::all();
        $User = User::all();


        return view('Listado.ListadoTelefono.General.edit',compact('User','ListadoTelefono','Departamentos','Pisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $ListadoTelefono = Telefonos::find($id);
         $ListadoTelefono->departamento_id = $request->departamento_id;
        $ListadoTelefono->piso_id = $request->id_piso;
        $ListadoTelefono->user_id = $request->user_id;
        $ListadoTelefono->Equipo = $request->equipo;
        $ListadoTelefono->Extension = $request->Extesion;
        $ListadoTelefono->Observacion = $request->Observacion;
        $ListadoTelefono->update();
        

        return redirect('/ListadoTelefono');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
