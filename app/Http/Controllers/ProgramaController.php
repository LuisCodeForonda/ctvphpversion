<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramaRequest;
use App\Models\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programas = Programa::orderBy('id', 'desc')->paginate(10);
        return view('programas.index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programas.create', ['programa' => new Programa()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaRequest $request)
    {
        //
        $datos_programa = request()->except(['_token']);

        if ($request->hasFile('foto')) {
            $datos_programa['foto'] = $request->file('foto')->store('uploads', 'public');

            //linea agregada para produccion
            //$request->foto->move(base_path('public_html/storage/uploads'), $datos_programa['foto']);
        }

        Programa::insert($datos_programa);
        return redirect()->route('programas.index')->with('status', 'Registro agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
        return view('programas.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        //
        $request->validate([
            'nombre' => ['required'],
            'hora_inicio' => ['required'],
            'hora_fin' => ['required'],
            'descripcion' => ['required'],
        ]);

        $datos_programa = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {

            Storage::delete('public/' . $programa->foto);

            //metodo para eliminar de public_html en produccion
            // $filename = '/home2/catolicatv/public_html/storage/'.$programa->foto;
            // if (file_exists($filename)) {
            //     unlink($filename);
            //     //echo "La imagen se elimin贸 correctamente.";
            // }

            $datos_programa['foto'] = $request->file('foto')->store('uploads', 'public');

            //codigo para la version de produccion
            //$request->foto->move(base_path('public_html/storage/uploads'), $datos_programa['foto']);
        }

        Programa::where('id', '=', $programa->id)->update($datos_programa);
        return redirect()->route('programas.index')->with('status', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
        if (Storage::delete('public/' . $programa->foto)) {
            $programa->delete();
        }

        //metodo para eliminar de public_html
        // $filename = '/home2/catolicatv/public_html/storage/' . $programa->foto;
        // if (file_exists($filename)) {
        //     unlink($filename);
        //     //echo "La imagen se elimin贸 correctamente.";
        // } else {
        //     //echo "La imagen no existe en la ruta especificada .";
        // }

        return redirect()->route('programas.index')->with('status', 'Registro eliminado exitosamente');
    }
}
