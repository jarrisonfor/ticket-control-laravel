<?php

namespace App\Http\Livewire\Sidebar;

use App\Http\Livewire\BaseLivewire;

class Menu extends BaseLivewire
{

    public $icon;
    public $text;

    public function render()
    {
        return view('livewire.sidebar.menu');
    }

}
