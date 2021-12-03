<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{

    public function index()
    {
        return view('inicio.contactanos');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'torre' => 'required',
            'apart' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);


        $correo = new ContactanosMailable($request->all());
        Mail::to('crispromax00@gmail.com')->send($correo);

        return redirect()->route('inicio.contactanos')->with('info', 'Mensaje enviado');
    }
}
