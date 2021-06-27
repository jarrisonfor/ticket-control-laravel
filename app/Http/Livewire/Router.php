<?php

namespace App\Http\Livewire;

class Router extends BaseLivewire
{

    public $content = 'tickets';

    protected $listeners = ['changeContent'];

    public function changeContent($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        return view('livewire.router');
    }
}
