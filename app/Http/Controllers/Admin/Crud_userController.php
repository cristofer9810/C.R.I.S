<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Category_debt;
use App\Models\Debt;
use App\Models\User;
use Illuminate\Http\Request;

use Livewire\WithPagination;

class Crud_userController extends Controller
{
    public function index()
    {
        return view('admin.crud_users.index');
    }

    public function create()
    {

        //El pluck método recupera todos los valores de una clave determinada
        $crud_users = User::all();

        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];

        $cargos = [
            'Administrador' => 'Administrador',
            'Celador' => 'Celador',
            'Aseadora' => 'Aseadora',
            'Todero' => 'Todero',
            'Asistentes' => 'Asistentes',
            'No registra' => 'No registra',
        ];

        $category_debts = Category_debt::pluck('name', 'id');

        $debts = Debt::pluck('id', 'message', 'time1', 'time2', 'pay', 'total');

        return view('admin.crud_users.create', compact('category_debts', 'debts', 'crud_users', 'colors', 'cargos'));
    }


    public function store(UserRequest $request)
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];

        $cargos = [
            'Administrador' => 'Administrador',
            'Celador' => 'Celador',
            'Aseadora' => 'Aseadora',
            'Todero' => 'Todero',
            'Asistentes' => 'Asistentes',
            'No registra' => 'No registra',
        ];

        // ******crear las validaciones con el metodo request para despues hacer lo mismo con las deudas *****

        $crud_user = User::create($request->only('name', 'email', 'telephone', 'address', 'cargo', 'status', 'color')
            + [
                'password' => bcrypt($request->input('password')),
            ]);

        return redirect()->route('admin.crud_users.edit', $crud_user)->with('info', 'Se a creadó el usuario correctamente');
    }


    public function edit(User $crud_user)
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
        ];

        $cargos = [
            'Administrador' => 'Administrador',
            'Celador' => 'Celador',
            'Aseadora' => 'Aseadora',
            'Todero' => 'Todero',
            'Asistentes' => 'Asistentes',
            'No registra' => 'No registra',
        ];

        $category_debts = Category_debt::pluck('name', 'id');

        return view('admin.crud_users.edit', compact('crud_user', 'colors', 'cargos'));
    }

    public function update(UserRequest $request, User $crud_user)
    {     

        $data = $request->only('name', 'email', 'telephone', 'address', 'cargo', 'status', 'color');
        $password = $request->input('password');
        if ($password) {
            $data['password'] = bcrypt($password);
        }

        $crud_user->update($data);

        return redirect()->route('admin.crud_users.edit', $crud_user)->with('info', 'Se actualizó el usuario correctamente');
    }

    public function destroy(User $crud_user)
    {
        
        $crud_user->delete();

        return redirect()->route('admin.crud_users.index', $crud_user)->with('eliminar', 'el usuario se elimino con exito');
    }
}
