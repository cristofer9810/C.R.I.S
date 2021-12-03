<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function show(Release $release)
    {
        $this->authorize('published', $release);

        $similares = Release::where('category_id', $release->category_id)
                              ->where('status', 2)
                              ->where('id', '!=', $release->id)
                              ->latest('id')
                              ->take(4)
                              ->get();

        return view('inicio.show', compact('release', 'similares'));
    }
}
