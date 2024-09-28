<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Release;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ReleaseRequest;

class ReleaseController extends Controller
{


    public function __construct()
    {
        //proteje los metodos para que ningun usuario pueda acceder desde la URL sin autorizacion
        $this->middleware('can:admin.release.index')->only('index');
        $this->middleware('can:admin.release.create')->only('create', 'store');
        $this->middleware('can:admin.release.edit')->only('edit', 'update');
        $this->middleware('can:admin.release.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.release.index');
    }


    public function create()
    {


        //envia la infromacion a la vista del return view para que en mi crear un post aparescan las categorias
        $categories = Category::pluck('name', 'id');

        return view('admin.release.create', compact('categories'));
    }


    public function store(ReleaseRequest $request)
    {

        //esto sirve para hacer pruebas si se esta guardando las imagenes en la ruta public/gallery o demas
        /* return Storage::put('public/storage/posts', $request->file('file')); */


        $release = Release::create($request->all());

        if ($request->file('file')) {
            $url = Storage::putFile('public/storage/posts', $request->file('file'));

            $release->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.release.edit', $release);
    }


    public function edit(Release $release)
    {

        $this->authorize('author', $release);

        $categories = Category::pluck('name', 'id');

        return view('admin.release.edit', compact('release', 'categories'));
    }


    public function update(ReleaseRequest $request, Release $release)
    {

        $this->authorize('author', $release);
        $release->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/storage/posts', $request->file('file'));

            if ($release->image) {
                Storage::delete($release->image->url);

                $release->image->update([
                    'url' => $url
                ]);
            } else {
                $release->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.release.edit', $release)->with('info', 'El post se actualizo con exito');
    }


    public function destroy(Release $release)
    {

        $this->authorize('author', $release);
        $release->delete();

        return redirect()->route('admin.release.index', $release)->with('info', 'El post se elimino con exito');
    }
}
