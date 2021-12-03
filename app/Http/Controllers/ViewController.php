<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;
use App\Models\View;
use App\Models\Category;


class ViewController extends Controller
{
    public function index()
    {
        $views = View::where('status', 1)->get();//->latest('id');

        return view('inicio.index', compact('views'));
    }

    public function gallery()
    {
       $views = View::where('status', 1)->get();

       return view('inicio.galeria', compact('views'));
    }

    public function category(Category $category)
    {
        $releases = Release::where('category_id', $category->id)
                              ->where('status', 2)
                              ->latest('id')
                              ->paginate(3);

        return view('inicio.category', compact('releases', 'category'));
    }

}
