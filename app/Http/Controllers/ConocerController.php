<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConocerController extends Controller
{
    
    public function index()
    {
        return view('conocer.ciclo');
    }

    public function licitacion()
    {
        return view('conocer.licitacion');
    }

    public function manualc()
    {
        return view('conocer.manualC');
    }

    public function manualb()
    {
        return view('conocer.manualB');
    }

    public function lineas()
    {
        return view('conocer.lineas');
    }


}
