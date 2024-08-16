<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(cita::all(), 200);//Mostrar todas las citas
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos
        $datos = $request->validate([
            'fecha'=> ['requered', 'string'],
            'datos_moto'=>['nullable', 'string'],

        ]);

        //guardar datos
        $cita = Cita::create($datos);

        //Respuesta al cliente
       return response()->json([
        'success'=> true,
        'message'=> 'Cita creada exitosamente',
       ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        return response()->json($cita, 200); //Mostrar cita
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
         //Validar datos
         $datos = $request->validate([
            'fecha'=> ['requered', 'string'],
            'datos_moto'=>['nullable', 'string'],

        ]);

        //actualizar datos
        $cita->update($datos);

        //Respuesta al cliente
       return response()->json([
        'success'=> true,
        'message'=> 'Cita actualizada exitosamente',
       ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return response()->json([
            'success'=> true,
            'message'=> 'Cita eliminada exitosamente',
           ],204);
    }
}
