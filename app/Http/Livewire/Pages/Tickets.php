<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BaseLivewire;
use App\Models\Ticket;
use Livewire\WithPagination;

class Tickets extends BaseLivewire
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private function _getPaginatedData()
    {
        return Ticket::paginate(1);
    }

    public function render()
    {
        return view('livewire.pages.tickets', ['tickets' => $this->_getPaginatedData()]);
    }

}
