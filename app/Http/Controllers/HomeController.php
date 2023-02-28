<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Programacion;
use App\Models\Programa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $noticias = Noticia::orderBy('id', 'desc')->get();
        return view('index', compact('noticias'));
    }

    public function detallenoticia($slug){
        $noticia = Noticia::where('slug', '=', $slug)->get();
        return view('detallenoticia', compact('noticia'));
    }

    public function quienessomos(){
        return view('quienessomos');
    }

    public function programacion(){
        $lunesviernes = Programacion::where('dia', '=', 0)->orderBy('hora')->get();
        $sabados = Programacion::where('dia', '=', 1)->orderBy('hora')->get();
        $domingos = Programacion::where('dia', '=', 2)->orderBy('hora')->get();
        return view('programacion', compact('lunesviernes', 'sabados', 'domingos'));
    }

    public function programas(){
        $religiosos = Programa::where('categoria', '=', 1)->get();
        $noticieros = Programa::where('categoria', '=', 2)->get();
        $analisis = Programa::where('categoria', '=', 3)->get();
        $familiares = Programa::where('categoria', '=', 4)->get();
        $entretenimiento = Programa::where('categoria', '=', 5)->get();
        return view('programas', compact('religiosos', 'noticieros','analisis','familiares','entretenimiento'));
    }

    public function contactos(){
        return view('contactos');
    }
}
