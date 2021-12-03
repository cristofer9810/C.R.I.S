<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

//usamos esto siempre cuando vayamos a hacer paginacion
use Livewire\WithPagination;


class CrudUser extends Component
{

    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    
    public function updatingSearch()
    {

        $this->resetPage();
    }

    protected $listeners = ['render', 'delete'];

    

    public function delete(User $crud_user)
    {
        $crud_user->delete();
    }

    public function render()
    {

        $crud_users = User::where('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
        ->paginate();
        
        return view('livewire.admin.crud-user', compact('crud_users'));
    }
}
