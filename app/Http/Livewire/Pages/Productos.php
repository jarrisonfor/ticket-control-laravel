<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BasePageLivewire;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;

class Productos extends BasePageLivewire
{

    public $nombre = null;
    protected $rules = [
        'modelId' => ['sometimes', 'numeric'],
        'nombre' => ['required', 'string', 'min:3'],
    ];

    public function delete($id)
    {
        Producto::find($id)->delete();
    }

    public function clearPropertys()
    {
        $this->nombre = null;
        $this->modelId = 0;
    }

    public function setPropertys($id)
    {
        $producto = Producto::find($id);
        $this->modelId = $producto->id;
        $this->nombre = $producto->nombre;
    }

    public function submit()
    {
        $this->validate();

        $producto = $this->modelId ? Producto::find($this->modelId) : new Producto();
        $producto->nombre = $this->nombre;
        $producto->save();
        $this->clearPropertys();
        $this->principal();
    }

    public function route()
    {
        return Route::get('productos', static::class)
            ->name('productos');
    }

    public function render()
    {
        if ($this->form) {
            return view('livewire.pages.forms.producto');
        }
        return view('livewire.pages.productos', ['productos' => Producto::orderBy('id')->paginate(6)]);
    }

}
