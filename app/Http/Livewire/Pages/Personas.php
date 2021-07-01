<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BaseLivewire;
use App\Models\Persona;
use Livewire\WithPagination;

class Personas extends BaseLivewire
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private function _getPaginatedData()
    {
        return Persona::paginate(1);
    }

    public function render()
    {
        return view('livewire.pages.personas', ['personas' => $this->_getPaginatedData()]);
    }

}
