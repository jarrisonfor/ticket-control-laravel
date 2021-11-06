<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BasePageLivewire;
use Illuminate\Support\Facades\Route;

class Graficas extends BasePageLivewire
{

    public function clearPropertys()
    {
        // por ahora vacio
    }

    public function setPropertys($id)
    {
        // por ahora vacio
    }

    public function route()
    {
        return Route::get('graficas', static::class)
            ->name('graficas');
    }

    public function render()
    {
        return view('livewire.pages.graficas');
    }

}
