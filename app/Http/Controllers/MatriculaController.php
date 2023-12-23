<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matricula::all();
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
        $matricula = new Matricula();
        $matricula -> id_curso = $request -> id_curso;
        $matricula -> id_docente = $request -> id_docente;
        $matricula -> id_alumno = $request -> id_alumno;
        $matricula -> save();
        return "La matricula se guardó correctamente.";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = Matricula::find($id);
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        $matricula -> id_curso = $request -> id_curso;
        $matricula -> id_docente = $request -> id_docente;
        $matricula -> id_alumno = $request -> id_alumno;
        $matricula -> save();
        return "La matricula se actualizó correctamente.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docente = Matricula::find($id);
        $docente -> delete();
        return "La matricula se eliminó correctamente.";
    }
}
