<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CreateUser extends Component
{

    public $open = false;

    public function render()
    {
        return view('livewire.admin.create-user');
    }
}
