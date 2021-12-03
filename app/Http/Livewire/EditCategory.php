<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{

    public $open = false;
/* 
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    } */

    public function render()
    {
        return view('livewire.edit-category');
    }
}
