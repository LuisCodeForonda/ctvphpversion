<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaRequest;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $noticias = Noticia::orderBy('id', 'desc')->paginate(10);
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('noticias.create', ['noticia' => new Noticia()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaRequest $request)
    {
        //
        $datos_noticia =  request()->except((['_token']));
        $datos_noticia['slug'] = Str::slug($datos_noticia['titulo']);

        if ($request->hasFile('foto')) {
            $datos_noticia['foto'] = $request->file('foto')->store('uploads', 'public');

            //linea agregada para produccion
            //$request->foto->move(base_path('public_html/storage/uploads'), $datos_noticia['foto']);
        }

        Noticia::insert($datos_noticia);
        return Redirect()->route('noticias.index')->with('status', 'Registro agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
        $request->validate([
            'titulo' => ['required'],
            'cuerpo' => ['required'],
            'fecha' => ['required'],
        ]);

        $datos_noticia = request()->except(['_token', '_method']);
        $datos_noticia['slug'] = Str::slug($datos_noticia['titulo']);

        if ($request->hasFile('foto')) {

            Storage::delete('public/' . $noticia->foto);

            //metodo para eliminar de public_html en produccion
            // $filename = '/home2/catolicatv/public_html/storage/'.$noticia->foto;
            // if (file_exists($filename)) {
            //     unlink($filename);
            //     //echo "La imagen se elimin贸 correctamente.";
            // }

            $datos_noticia['foto'] = $request->file('foto')->store('uploads', 'public');

            //codigo para la version de produccion
            //$request->foto->move(base_path('public_html/storage/uploads'), $datos_noticia['foto']);
        }

        Noticia::where('id', '=', $noticia->id)->update($datos_noticia);
        return Redirect()->route('noticias.index')->with('status', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
        if (Storage::delete('public/' . $noticia->foto)) {
            $noticia->delete();
        }

        //metodo para eliminar de public_html
        // $filename = '/home2/catolicatv/public_html/storage/' . $noticia->foto;
        // if (file_exists($filename)) {
        //     unlink($filename);
        //     //echo "La imagen se elimin贸 correctamente.";
        // } else {
        //     //echo "La imagen no existe en la ruta especificada .";
        // }

        return redirect()->route('noticias.index')->with('status', 'Registro eliminado exitosamente');
    }
}
