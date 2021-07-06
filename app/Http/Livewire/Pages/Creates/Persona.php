<?php

namespace App\Http\Livewire\Pages\Creates;

use App\Models\Persona as ModelsPersona;
use Livewire\Component;

class Persona extends Component
{

    public $nombre;

    protected $rules = [
        'nombre' => ['required', 'string', 'min:3'],
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        ModelsPersona::create([
            'nombre' => $this->nombre,
        ]);
    }

    public function render()
    {
        return view('livewire.pages.creates.persona');
    }

}
