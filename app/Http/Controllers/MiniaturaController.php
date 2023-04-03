<?php

namespace App\Http\Controllers;

use App\Http\Requests\MiniaturaRequest;
use App\Models\Miniatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MiniaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $miniaturas = Miniatura::paginate(5);
        return view('miniaturas.index', compact('miniaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('miniaturas.create', ['miniatura' => new Miniatura()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiniaturaRequest $request)
    {
        //
        $datos_miniatura = request()->except(['_token']);

        if ($request->hasFile('foto')) {
            $datos_miniatura['foto'] = $request->file('foto')->store('uploads', 'public');

            //linea agregada para produccion
            //$request->foto->move(base_path('public_html/storage/uploads'), $datos_miniatura['foto']);
        }

        Miniatura::insert($datos_miniatura);

        return redirect()->route('miniaturas.index')->with('status', 'Registro agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miniatura  $miniatura
     * @return \Illuminate\Http\Response
     */
    public function show(Miniatura $miniatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miniatura  $miniatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Miniatura $miniatura)
    {
        //
        return view('miniaturas.edit', compact('miniatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miniatura  $miniatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miniatura $miniatura)
    {
        //
        $request->validate([
            'nombre' => ['required'],
        ]);

        $datos_miniatura = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {

            Storage::delete('public/' . $miniatura->foto);
            //metodo para eliminar de public_html en produccion
            // $filename = '/home2/catolicatv/public_html/storage/' . $miniatura->foto;
            // if (file_exists($filename)) {
            //     unlink($filename);
            //     //echo "La imagen se elimin贸 correctamente.";
            // }

            $datos_miniatura['foto'] = $request->file('foto')->store('uploads', 'public');

            //codigo para la version de produccion
            //$request->foto->move(base_path('public_html/storage/uploads'), $datos_miniatura['foto']);
        }

        Miniatura::where('id', '=', $miniatura->id)->update($datos_miniatura);
        return redirect()->route('miniaturas.index')->with('status', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miniatura  $miniatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miniatura $miniatura)
    {
        //
        if (Storage::delete('public/' . $miniatura->foto)) {
            $miniatura->delete();
        }

        //metodo para eliminar de public_html
        // $filename = '/home2/catolicatv/public_html/storage/'.$miniatura->foto;
        // if (file_exists($filename)) {
        //     unlink($filename);
        //     //echo "La imagen se elimin贸 correctamente.";
        // } else {
        //     //echo "La imagen no existe en la ruta especificada .";
        // }

        return redirect()->route('miniaturas.index')->with('status', 'Registro eliminado exitosamente');
    }
}
