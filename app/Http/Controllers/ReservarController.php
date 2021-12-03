<?php

namespace App\Http\Controllers;

use App\Mail\ReservarMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservarController extends Controller
{
    public function index()
    {
        return view('inicio.reservar');
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
            'date1' => 'required',
            'time1' => 'required',
            'date2' => 'required',
            'time2' => 'required',
        ]);


        $correo = new ReservarMailable($request->all());
        Mail::to('crispromax00@gmail.com')->send($correo);

        return redirect()->route('inicio.reservar')->with('info', 'Mensaje enviado al administrador, espere hasta que el administrador se cominqué con ustedes');
    }
}

