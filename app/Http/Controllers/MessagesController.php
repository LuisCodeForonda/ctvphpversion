<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    //


    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'subject' => ['required', ],
            'content' => ['required', ],
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('ctvbolivia@gmail.com')->send($correo);

        return redirect()->route('contactos')->with('status', 'Mensaje enviado');
    
    }
}
