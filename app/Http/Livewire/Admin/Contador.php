<?php

namespace App\Http\Livewire\Admin;

use App\Models\Release;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;


class Contador extends Component
{
    //where('name', '=', 'tomas drogas')->
    public function render()
    {
        $users_count = User::count();

        $release = Release::count();

        $role = Role::count();

        $asistente = User::where('cargo', 'Celador')
                           ->orWhere('cargo', 'Aseadora')
                           ->orWhere('cargo', 'Todero')
                           ->orWhere('cargo', 'Asistentes')
                           ->count();

        return view('livewire.admin.contador', compact('users_count', 'release', 'role', 'asistente'));
    }
}
