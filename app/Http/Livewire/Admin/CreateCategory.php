<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category_debt;


class CreateCategory extends Component
{

    use WithPagination;

    public $category_debt;
    public $confirmingCategoryDeletion = false;
    public $confirmingCategoryAdd = false;

    protected $rules =[
           'category_debt.name' => 'required|string|min4',
           'category_debt.slug' => 'required|string|min4',
           'category_debt.color' => 'required',
    ];


    public function render()
    {

        $Category_debts = Category_debt::all();

        return view('livewire.admin.create-category', compact('Category_debts'));

    }

    public function confirmingCategoryDeletion($id)
    {
        # code...
    }

}
