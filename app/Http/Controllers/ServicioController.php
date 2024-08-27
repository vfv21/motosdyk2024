<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Servicio::create($request->all());
        return to_route('servicios.index')->with('info', 'Servicio creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', ['servicio' => $servicio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $servicio->update($request->all());
        return to_route('servicios.index')->with('info', 'Servicio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return to_route('servicios.index')->with('info', 'Servicio eliminado con éxito');
    }
}
