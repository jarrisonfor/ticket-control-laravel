<?php

namespace App\Http\Livewire\Sidebar;

use App\Http\Livewire\BaseLivewire;

class Sidebar extends BaseLivewire
{
    public $content;

    public function render()
    {
        return view('livewire.sidebar.sidebar');
    }

}
