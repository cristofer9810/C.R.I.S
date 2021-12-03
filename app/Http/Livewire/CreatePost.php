<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{

    public $open = false;

/*     public $name, $slug; */

    public function render()
    {
        return view('livewire.create-post');
    }
}
