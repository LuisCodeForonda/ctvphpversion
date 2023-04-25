<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Miniatura;
use App\Models\Noticia;
use App\Models\Programacion;
use App\Models\Programa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $banners = Banner::orderBy('hora')->get();
        $miniaturas = Miniatura::all();
        $noticias = Noticia::orderBy('id', 'desc')->take(6)->get();

        return view('index', compact('noticias', 'banners', 'miniaturas'));
    }

    public function detallenoticia($slug){
        $miniaturas = Miniatura::all();
        $noticia = Noticia::where('slug', '=', $slug)->first();
        $titulares = Noticia::orderBy('id', 'desc')->take(6)->get();
        return view('detallenoticia', compact('noticia', 'titulares', 'miniaturas'));
    }

    public function quienessomos(){
        $miniaturas = Miniatura::all();
        return view('quienessomos', compact('miniaturas'));
    }

    public function programacion(){
        $miniaturas = Miniatura::all();
        $lunesviernes = Programacion::where('dia', '=', 0)->orderBy('hora')->get();
        $sabados = Programacion::where('dia', '=', 1)->orderBy('hora')->get();
        $domingos = Programacion::where('dia', '=', 2)->orderBy('hora')->get();
        return view('programacion', compact('lunesviernes', 'sabados', 'domingos', 'miniaturas'));
    }

    public function programas(){
        $miniaturas = Miniatura::all();
        $religiosos = Programa::where('categoria', '=', 1)->get();
        $noticieros = Programa::where('categoria', '=', 2)->get();
        $analisis = Programa::where('categoria', '=', 3)->get();
        $familiares = Programa::where('categoria', '=', 4)->get();
        $entretenimiento = Programa::where('categoria', '=', 5)->get();
        return view('programas', compact('religiosos', 'noticieros','analisis','familiares','entretenimiento', 'miniaturas'));
    }

    public function contactos(){
        $miniaturas = Miniatura::all();
        return view('contactos', compact('miniaturas'));
    }

    public function correos(){
        $miniaturas = Miniatura::all();
        return view('correos', compact('miniaturas'));
    }
}
