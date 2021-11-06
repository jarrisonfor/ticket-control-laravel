<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Exportar
                </button>
            </div>
            <button wire:click="create()" type="button" class="btn btn-sm btn-outline-secondary">
                Añadir
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">F. Compra</th>
                    <th scope="col">Establecimiento</th>
                    <th scope="col">Nº Productos</th>
                    <th scope="col">P. Total</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->fecha_compra}}</td>
                        <td>{{$ticket->establecimiento->nombre}}</td>
                        <td>
                        {{
                            $ticket->productos->sum(function ($producto) {
                                return $producto->pivot->cantidad;
                            })
                        }}
                        </td>
                        <td>
                        {{
                            number_format(
                                $ticket->productos->sum(function ($producto) {
                                    return $producto->pivot->precio * $producto->pivot->cantidad;
                                }),
                                2,
                                ',',
                                '.'
                            )
                        }}€
                        </td>
                        <td>
                            <button wire:click="edit({{$ticket->id}})" type="button" class="btn btn-sm btn-outline-primary">
                                Editar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tickets->links() }}
    </div>
</div>
