<?php

namespace App\Http\Livewire\Admin;

use App\Models\view as ModelsView;
use Livewire\Component;
use App\Models\Views;

use Livewire\WithPagination;

class View extends Component
{


    //activa la paginacion pero antes llamamos al componente con:    use Livewire\WithPagination;
    use WithPagination;

    //le ordena a laravel que use bootstrap en ves de livewire
    protected $paginationTheme = "bootstrap";

    //estas propiedades ayudan al buscador 

    public $search = "";
    public $sort = 'id';
    public $direction = 'desc';

    //esta linea muestra el registro en todas las paginas en un paginated
    public function updatingSearch()
    {

        $this->resetPage();
    }


    public function render()
    {

        $views = ModelsView::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->latest('id')
            ->paginate();


        return view('livewire.admin.view', compact('views'));
    }
}
