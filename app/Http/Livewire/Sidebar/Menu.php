<?php

namespace App\Http\Livewire\Sidebar;

use App\Http\Livewire\BaseLivewire;

class Menu extends BaseLivewire
{
    public $content = 'tickets';
    public $icon;
    public $text;
    public $active = false;

    public function mount()
    {
        if ($this->text == $this->content) {
            $this->active = true;
        } else {
            $this->active = false;
        }
    }

    public function render()
    {
        return view('livewire.sidebar.menu');
    }

    public function change()
    {
        $this->emitUp('changeContent', $this->text);
    }

}
