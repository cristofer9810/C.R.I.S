<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        $cel = User::where('cargo', 'Celador')->count();
        $ase = User::where('cargo', 'Aseadora')->count();
        $tod = User::where('cargo', 'Todero')->count();
        $asi = User::where('cargo', 'Asistentes')->count();

        // una mausque herramienta que me ayudara más tarde
        $cela = User::Where('cargo', 'Celador')->get();
        $asea = User::where('cargo', 'Aseadora')->get();
        $tode = User::where('cargo', 'Todero')->get();
        $asis = User::where('cargo', 'Asistentes')->get();

        $asistente = User::where('cargo', 'Celador')
                           ->orWhere('cargo', 'Aseadora')
                           ->orWhere('cargo', 'Todero')
                           ->orWhere('cargo', 'Asistentes')
                           ->count();

        return view('admin.index', compact('users', 'cel', 'ase', 'tod', 'asi', 'cela', 'asea', 'tode', 'asis', 'asistente')); 
    }
}
