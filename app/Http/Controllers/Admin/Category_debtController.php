<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_debt;
use Illuminate\Http\Request;

class Category_debtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_debts = Category_debt::all();
        return view('admin.category_debts.index', compact('category_debts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $colors =[
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];

        return view('admin.category_debts.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:category_debts',
            'color' => 'required',

        ]);

        $category_debt = Category_debt::create($request->all());

        return redirect()->route('admin.category_debts.index', compact('category_debt'))->with('info', 'La categoria se creó con exito');
    }


    public function edit(Category_debt $category_debt)
    {

        $colors =[
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];

        return view('admin.category_debts.edit', compact('category_debt', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_debt $category_debt)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:category_debts,slug,$category_debt->id",
            'color' => 'required',

        ]);

        $category_debt->update($request->all());

        return redirect()->route('admin.category_debts.index', $category_debt)->with('info', 'La categoria se actualizó con exito');

    }

    public function destroy(Category_debt $category_debt)
    {
        $category_debt->delete();

        return redirect()->route('admin.category_debts.index')->with('info', 'La categoria se eliminó con exito');
    }
}
