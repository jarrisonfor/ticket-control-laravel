<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Establecimientos</h1>
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

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        @foreach ($establecimientos as $establecimiento)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{$establecimiento->imagen ?: 'https://siemprendes.com/wp-content/uploads/2021/01/Mi-primera-Tienda-Online.jpg'}}" class="card-img-top" alt="{{$establecimiento->nombre}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$establecimiento->id}}. {{$establecimiento->nombre}}</h5>
                        <p class="card-text"></p>
                        <button wire:click="edit({{$establecimiento->id}})" class="btn btn-primary">Editar</button>
                        <button wire:click="delete({{$establecimiento->id}})" class="btn btn-danger">Borrar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $establecimientos->links() }}
</div>
