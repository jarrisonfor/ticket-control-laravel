<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BaseLivewire;
use App\Models\Producto;
use Livewire\WithPagination;

class Productos extends BaseLivewire
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private function _getPaginatedData()
    {
        return Producto::paginate(1);
    }

    public function cambiarCrear()
    {
        $this->emitUp('changeContent', 'create_producto');
    }

    public function render()
    {
        return view('livewire.pages.productos', ['productos' => $this->_getPaginatedData()]);
    }

}
