<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BasePageLivewire;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\Route;

class Establecimientos extends BasePageLivewire
{

    public $nombre = null;
    protected $rules = [
        'modelId' => ['sometimes', 'numeric'],
        'nombre' => ['required', 'string', 'min:3'],
    ];

    public function delete($id)
    {
        Establecimiento::find($id)->delete();
    }

    public function clearPropertys()
    {
        $this->nombre = null;
        $this->modelId = 0;
    }

    public function setPropertys($id)
    {
        $establecimiento = Establecimiento::find($id);
        $this->modelId = $establecimiento->id;
        $this->nombre = $establecimiento->nombre;
    }

    public function submit()
    {
        $this->validate();

        $establecimiento = $this->modelId ? Establecimiento::find($this->modelId) : new Establecimiento();
        $establecimiento->nombre = $this->nombre;
        $establecimiento->save();
        $this->clearPropertys();
        $this->principal();
    }

    public function route()
    {
        return Route::get('establecimientos', static::class)
            ->name('establecimientos');
    }

    public function render()
    {
        if ($this->form) {
            return view('livewire.pages.forms.establecimiento');
        }
        return view('livewire.pages.establecimientos', ['establecimientos' => Establecimiento::orderBy('id')->paginate(6)]);
    }

}
