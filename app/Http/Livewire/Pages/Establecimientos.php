<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BaseLivewire;
use App\Models\Establecimiento;
use Livewire\WithPagination;

class Establecimientos extends BaseLivewire
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private function _getPaginatedData()
    {
        return Establecimiento::paginate(1);
    }

    public function cambiarCrear()
    {
        $this->emitUp('changeContent', 'create_establecimiento');
    }

    public function render()
    {
        return view('livewire.pages.establecimientos', ['establecimientos' => $this->_getPaginatedData()]);
    }

}
