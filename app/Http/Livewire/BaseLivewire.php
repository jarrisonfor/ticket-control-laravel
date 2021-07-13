<?php

namespace App\Http\Livewire;

use Livewire\Component;

abstract class BaseLivewire extends Component
{

    public $vista = '';

    public function principal()
    {
        $this->vista = '';
    }

    public function create()
    {
        $this->vista = 'create';
    }

    public function edit($id)
    {
        $this->vista = 'edit';
    }

    public function view($id)
    {
        $this->vista = 'view';
    }

}
