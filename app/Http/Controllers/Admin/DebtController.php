<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_debt;
use App\Models\Debt;
use App\Models\User;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_debts = Category_debt::all();

        return view('admin.debts.index', compact('category_debts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debts = User::all();

        $category_debts = Category_debt::pluck('name', 'id');

        return view('admin.debts.create', compact('category_debts', 'debts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $debts = Debt::create($request->all());

        $debt_id = $request->input('debt_id');
        $user_id = $request->input('user_id');

        $debt_user = Debt::where('debt_id', $debt_id)
                         ->where('user_id', $user_id)->first();
        if ($debt_user) {
            return back()->with('notification', 'El usuario ya tiene una deuda');

            $debt_user->debt_id =$debt_id;
            $debt_user->user_id =$user_id;
            $debt_user->save();

            return back();

        }

        return redirect()->route('admin.debts.edit', $debts);
    }

    public function edit(User $debt)
    {

        $category_debts = Category_debt::pluck('name', 'id');
        #$user = User::where('id_user', $id_user);
        $solor = User::pluck('color', 'id');
        $selectedDebt = User::pluck('color', 'id');
        $debts = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];

        return view('admin.debts.edit', compact('debt','category_debts', 'debts', 'solor', 'selectedDebt'));
    }


    public function update(Request $request, Debt $debt)
    {
        return redirect()->route('admin.debts.edit', $debt);
    }


    public function destroy(Debt $debt)
    {
        //
    }
}
