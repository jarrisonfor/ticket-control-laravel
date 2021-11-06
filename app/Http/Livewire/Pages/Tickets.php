<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire\BasePageLivewire;
use App\Models\Establecimiento;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;

class Tickets extends BasePageLivewire
{

    public $establecimiento;
    public $fechaCompra;
    public $conceptos = [];

    protected $rules = [
        'establecimiento' => ['required', 'string', 'min:3'],
        'fechaCompra' => ['required', 'date'],
        'conceptos' => ['required', 'array'],
        'conceptos.*.producto' => ['required', 'string', 'min:3'],
        'conceptos.*.cantidad' => ['required', 'integer', 'min:1'],
        'conceptos.*.precio' => ['required', 'numeric', 'min:0.01'],
        'conceptos.*.persona' => ['required', 'string', 'min:3'],
        'conceptos.*.oferta' => ['required', 'boolean'],
    ];

    public function delete($id)
    {
        Ticket::find($id)->delete();
    }

    public function clearPropertys()
    {
        $this->modelId = 0;
        $this->establecimiento = null;
        $this->fechaCompra = null;
        $this->conceptos = [
            [
                'producto' => '',
                'cantidad' => 1,
                'precio' => 0.01,
                'persona' => '',
                'oferta' => false,
            ],
        ];
    }

    public function setPropertys($id)
    {
        $this->conceptos = [];
        $ticket = Ticket::find($id);
        $this->modelId = $ticket->id;
        $this->establecimiento = $ticket->establecimiento->nombre;
        $this->fechaCompra = $ticket->fecha_compra;
        foreach ($ticket->productos as $producto) {
            $this->conceptos[] = [
                'producto' => $producto->nombre,
                'cantidad' => $producto->pivot->cantidad,
                'precio' => $producto->pivot->precio,
                'persona' => Persona::find($producto->pivot->persona_id)->nombre,
                'oferta' => $producto->pivot->oferta,
            ];
        }
    }

    public function submit()
    {
        $this->validate();

        $establecimiento = Establecimiento::firstOrCreate([
            'nombre' => $this->establecimiento,
        ]);

        $ticket = $this->modelId ? Ticket::find($this->modelId) : new Ticket();
        $ticket->establecimiento_id = $establecimiento->id;
        $ticket->fecha_compra = $this->fechaCompra;
        $ticket->save();
        $conceptos = [];
        foreach ($this->conceptos as $concepto) {
            $producto = Producto::firstOrCreate([
                'nombre' => $concepto['producto'],
            ]);
            $producto->establecimientos()->sync([$establecimiento->id]);
            $persona = Persona::firstOrCreate([
                'nombre' => $concepto['persona'],
            ]);
            $conceptos[$producto->id] = [
                'precio' => $concepto['precio'],
                'cantidad' => $concepto['cantidad'],
                'oferta' => $concepto['oferta'],
                'persona_id' => $persona->id,
            ];
        }
        $ticket->productos()->sync($conceptos);

        $this->clearPropertys();
        $this->principal();
    }

    public function addRow()
    {
        $this->conceptos[] = [
            'producto' => '',
            'cantidad' => 1,
            'precio' => 0.01,
            'persona' => '',
            'oferta' => false,
        ];
    }

    public function removeRow($row)
    {
        unset($this->conceptos[$row]);
    }

    public function route()
    {
        return Route::get('tickets', static::class)
            ->name('tickets');
    }

    public function render()
    {
        if ($this->form) {
            return view('livewire.pages.forms.ticket', [
                'establecimientos' => Establecimiento::all(),
                'personas' => Persona::all(),
                'productos' => Producto::all(),
            ]);
        }
        return view('livewire.pages.tickets', [
            'tickets' => Ticket::orderBy('id')->paginate(15),
            'establecimientos' => Establecimiento::all(),
            'personas' => Persona::all(),
            'productos' => Producto::all(),
        ]);
    }

}
