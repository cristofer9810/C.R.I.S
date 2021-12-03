<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

//usamos esto siempre cuando vayamos a hacer paginacion
use Livewire\WithPagination;

class Debt extends Component
{

    use WithPagination;

    public $searchU;
    public $searchE;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {

        $this->resetPage();
    }


    public function render()
    {

        $users = User::where('name', 'LIKE', '%' . $this->searchU . '%')
            ->orWhere('email', 'LIKE', '%' . $this->searchE . '%')
            ->paginate();

        return view('livewire.admin.debt', compact('users'));
    }
}
