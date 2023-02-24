<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramacionRequest;
use App\Models\Programacion;
use Illuminate\Http\Request;

class ProgramacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programacions = Programacion::paginate(10);
        return view('programacion.index', compact('programacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programacion.create', ['programacion'=> new Programacion()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramacionRequest $request)
    {
        //
        $datos_programacion = request()->except('_token');
        Programacion::insert($datos_programacion);
        return redirect()->route('programacion.index')->with('status', 'Registro agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function show(Programacion $programacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Programacion $programacion)
    {
        //
        return view('programacion.edit', compact('programacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramacionRequest $request, Programacion $programacion)
    {
        //
        $datos_programacion = request()->except(['_token', '_method']);
        Programacion::where('id', '=', $programacion->id)->update($datos_programacion);
        return redirect()->route('programacion.index')->with('status', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage. 
     *
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programacion $programacion)
    {
        //
        $programacion->delete();
        return redirect()->route('programacion.index')->with('status', 'Registro eliminado exitosamente');
    }
}
