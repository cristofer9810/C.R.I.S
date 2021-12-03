<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\View;

use Validator;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ReleaseRequest;

use App\Http\Requests\ViewRequest;

class ViewController extends Controller
{


    public function __construct()
    {
        //proteje los metodos para que ningun usuario pueda acceder desde la URL sin autorizacion
        $this->middleware('can:admin.views.index')->only('index');
        $this->middleware('can:admin.views.create')->only('create', 'store');
        $this->middleware('can:admin.views.edit')->only('edit', 'update');
        $this->middleware('can:admin.views.destroy')->only('destroy');
    }

    public function index()
    {
        $views = View::all();
        return view('admin.views.index', compact('views'));
    }

    public function create()
    {
        return view('admin.views.create');
    }


    public function store(ViewRequest $request)
    {

        //esto sirve para hacer pruebas si se esta guardando las imagenes en la ruta public/gallery o demas 
        /* return Storage::put('public/posts', $request->file('file')); */
        $view = View::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/galleries', $request->file('file'));

            // el Gallery() o Image() es el modelo ojo con esto
            $view->Gallery()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.views.edit', $view);
    }


    public function edit(View $view)
    {
        return view('admin.views.edit', compact('view'));
    }


    public function update(ViewRequest $request, View $view)
    {
        /* $this->authorize('author', $view); */
        $view->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/galleries', $request->file('file'));

            if ($view->gallery) {
                Storage::delete($view->gallery->url);

                $view->gallery->update([
                    'url' => $url
                ]);
            } else {
                $view->gallery()->create([
                    'url' => $url
                ]);
            }
        }



        return redirect()->route('admin.views.edit', $view)->with('info', 'la imagen se actualizo con exito');
    }


    public function destroy(View $view)
    {
        /* $this->authorize('author', $view); */

        $url = str_replace('storage', 'public', $view->url);
        Storage::delete($url);

        $view->delete();

        return redirect()->route('admin.views.index', $view)->with('eliminar', 'la imagen se elimino con exito');
    }
}
