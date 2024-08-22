<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanosController extends Controller
{

    // public function __construct()
    // {
    //     // los middleware donde protegera la ruta
    //     $this->middleware('can:admin.Planos.index')->only('index');
    //     $this->middleware('can:admin.Planos.create')->only('create', 'store', 'destroy');
    //     $this->middleware('can:admin.Planos.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.Planos.destroy')->only('destroy');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Planos.index');
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
        //
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
