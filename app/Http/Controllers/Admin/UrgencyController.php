<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Admin\UrgencyMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UrgencyController extends Controller
{

    public function index()
    {
        return view('admin.urgencies.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'torre' => 'required',
            'apart' => 'required',       
            'fecha1' => 'required',
            'fecha2' => 'required',
            'status' => 'required',
            'message' => 'required',
        ]);


        $correo = $request->get('email');

        $correo = new UrgencyMailable($request->all());
        Mail::to('crispromax00@gmail.com')->send($correo);

        return redirect()->route('admin.urgencies.index')->with('info', 'Mensaje enviado');
    }
}
