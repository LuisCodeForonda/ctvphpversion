<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function quienessomos(){
        return view('quienessomos');
    }

    public function programacion(){
        return view('programacion');
    }

    public function programas(){
        return view('programas');
    }

    public function contactos(){
        return view('contactos');
    }
}
