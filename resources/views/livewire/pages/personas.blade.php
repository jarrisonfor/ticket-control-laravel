<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Personas</h1>
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
        @foreach ($personas as $persona)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{$persona->imagen ?: 'https://static.vecteezy.com/system/resources/previews/000/566/937/non_2x/vector-person-icon.jpg'}}" class="card-img-top" alt="{{$persona->nombre}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$persona->id}}.{{$persona->nombre}}</h5>
                        <p class="card-text"></p>
                        <button wire:click="edit({{$persona->id}})" class="btn btn-primary">Editar</button>
                        <button wire:click="delete({{$persona->id}})" class="btn btn-danger">Borrar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $personas->links() }}
</div>
