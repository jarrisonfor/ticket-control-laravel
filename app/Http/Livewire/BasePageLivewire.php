<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

abstract class BasePageLivewire extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $modelId = null;
    public $form = false;
    public $edit = true;

    abstract function setPropertys($id);

    abstract function clearPropertys();

    public function principal()
    {
        $this->form = false;
        $this->edit = true;
    }

    public function create()
    {
        $this->clearPropertys();
        $this->form = true;
    }

    public function edit($id)
    {
        $this->setPropertys($id);
        $this->form = true;
    }

    public function view($id)
    {
        $this->setPropertys($id);
        $this->form = true;
        $this->edit = false;
    }

}
