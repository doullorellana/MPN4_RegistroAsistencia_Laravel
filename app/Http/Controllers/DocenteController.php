<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Docente::all();
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
        $docente = new Docente();
        $docente -> nombre = $request -> nombre;
        $docente -> apellido = $request -> apellido;
        $docente -> direccion = $request -> direccion;
        $docente -> telefono = $request -> telefono;
        $docente -> edad = $request -> edad;
        $docente -> fecha_nacimiento = $request -> fecha_nacimiento;
        $docente -> save();
        return "El docente se guardó correctamente.";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = Docente::find($id);
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);
        $docente -> nombre = $request -> nombre;
        $docente -> apellido = $request -> apellido;
        $docente -> direccion = $request -> direccion;
        $docente -> telefono = $request -> telefono;
        $docente -> edad = $request -> edad;
        $docente -> fecha_nacimiento = $request -> fecha_nacimiento;
        $docente -> save();
        return "El docente se actualizó correctamente.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente -> delete();
        return "El docente se eliminó correctamente.";
    }
}
