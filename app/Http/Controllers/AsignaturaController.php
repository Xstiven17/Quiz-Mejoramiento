<?php

namespace App\Http\Controllers;

use App\Models\asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index(){
        $asignaturas = asignatura::all();
        return view('asignaturas1.index', compact('asignaturas'));
   }

    public function create(){

        return view('asignaturas1.create');
    }

    public function store(Request $request){

        $asignatura = new asignatura();
        $asignatura->nombre = $request->nombre;
        $asignatura->codigo = $request->codigo;
        $asignatura->hora = $request->hora;
        $asignatura->save();

        return redirect()->route('asignaturas1.index')->with('success', 'Asignatura creada correctamente');
    }

    public function show(string $id) {
        $asignatura = asignatura::find($id);
        return view('asignaturas1.show', compact('asignatura'));
    }

    public function edit(string $id) {
        $asignatura = asignatura::find($id);
        return view('asignaturas1.edit', compact('asignatura'));
    }

    public function update(Request $request, string $id) {
        $asignatura = asignatura::find($id);
        $asignatura->nombre = $request->nombre;
        $asignatura->codigo = $request->codigo;
        $asignatura->hora = $request->hora;
        $asignatura->save();

        return redirect()->route('asignaturas1.index')->with('success', 'Asignatura actualizada correctamente');
    }

    public function destroy(string $id) {
        $asignatura = asignatura::find($id);
        $asignatura->delete();

        return redirect()->route('asignaturas1.index')->with('success', 'Asignatura eliminada correctamente');
    }
}