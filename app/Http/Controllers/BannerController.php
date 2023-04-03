<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::orderBy('hora')->paginate(10);
        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('banners.create', ['banner' => new Banner()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        //
        $datos_banner = request()->except(['_token']);
        
        if($request->hasFile('logo')){
            $datos_banner['logo'] = $request->file('logo')->store('uploads', 'public');
        }

        //codigo para produccion 
        //$request->logo->move(base_path('public_html/storage/uploads'), $datos_banner['logo']);

        Banner::insert($datos_banner);

        return redirect()->route('banners.index')->with('status', 'Registro agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
        return view('banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $request->validate([
            'nombre' => ['required'],
            'hora' => ['required'],
        ]);

        $datos_banner = request()->except(['_token', '_method']);
        
        if($request->hasFile('logo')){

            Storage::delete('public/'.$banner->logo);
            //metodo para eliminar de public_html en produccion
            // $filename = '/home2/catolicatv/public_html/storage/'.$banner->logo;
            // if (file_exists($filename)) {
            //     unlink($filename);
            //     //echo "La imagen se eliminó correctamente.";
            // }

            $datos_banner['logo'] = $request->file('logo')->store('uploads', 'public');

            //codigo para la version de produccion
            //$request->logo->move(base_path('public_html/storage/uploads'), $datos_banner['logo']);
        }
        
        Banner::where('id', '=', $banner->id)->update($datos_banner);
        return redirect()->route('banners.index')->with('status', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
        if(Storage::delete('public/'.$banner->logo)){
            $banner->delete();
        }

        //metodo para eliminar de public_html
        // $filename = '/home2/catolicatv/public_html/storage/'.$banner->logo;
        // if (file_exists($filename)) {
        //     unlink($filename);
        //     //echo "La imagen se eliminó correctamente.";
        // } else {
        //     //echo "La imagen no existe en la ruta especificada .";
        // }

        return redirect()->route('banners.index')->with('status', 'Registro eliminado exitosamente');
    }
}
