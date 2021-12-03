<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ModalEdit extends Component
{
    public $open = false;

    public $title, $content;

    public function render()
    {
        return view('livewire.admin.modal-edit');
    }
}
