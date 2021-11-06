<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BasePageLivewire;
use App\Models\Persona;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;

class Personas extends BasePageLivewire
{

    use WithPagination;

    public $nombre;

    protected $rules = [
        'modelId' => ['sometimes', 'numeric'],
        'nombre' => ['required', 'string', 'min:3'],
    ];

    public function delete($id)
    {
        Persona::find($id)->delete();
    }

    public function clearPropertys()
    {
        $this->nombre = null;
        $this->modelId = 0;
    }

    public function setPropertys($id)
    {
        $persona = Persona::find($id);
        $this->modelId = $persona->id;
        $this->nombre = $persona->nombre;
    }

    public function submit()
    {
        $this->validate();
        $persona = $this->modelId ? Persona::find($this->modelId) : new Persona();
        $persona->nombre = $this->nombre;
        $persona->save();
        $this->clearPropertys();
        $this->principal();
    }

    public function route()
    {
        return Route::get('personas', static::class)
            ->name('personas');
    }

    public function render()
    {
        if ($this->form) {
            return view('livewire.pages.forms.persona');
        }
        return view('livewire.pages.personas', ['personas' => Persona::orderBy('id')->paginate(6)]);
    }

}
