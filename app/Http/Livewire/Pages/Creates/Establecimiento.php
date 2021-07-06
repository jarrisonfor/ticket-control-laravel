<?php

namespace App\Http\Livewire\Pages\Creates;

use App\Models\Establecimiento as ModelsEstablecimiento;
use Livewire\Component;

class Establecimiento extends Component
{

    public $nombre;

    protected $rules = [
        'nombre' => ['required', 'string', 'min:3'],
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        ModelsEstablecimiento::create([
            'nombre' => $this->nombre,
        ]);
    }

    public function render()
    {
        return view('livewire.pages.creates.establecimiento');
    }

}
