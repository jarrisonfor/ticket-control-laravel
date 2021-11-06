<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            <span wire:click="principal()" class="material-icons-outlined return">
                arrow_back
            </span>
            Añadir Ticket
        </h1>
    </div>
    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input list="establecimientos" class="form-control {{ $errors->has('establecimiento') ? 'is-invalid' : '' }}" placeholder="Nombre del establecimiento" wire:model="establecimiento">
                        <label for="establecimiento" class="form-label">Establecimiento</label>
                        <div class="invalid-feedback">
                            @error('establecimiento')
                            {{ $message }}
                            @enderror
                        </div>
                        <datalist id="establecimientos">
                            @foreach ($establecimientos as $establecimiento)
                            <option value="{{ $establecimiento->nombre }}">
                                @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="form-control {{ $errors->has('fechaCompra') ? 'is-invalid' : '' }}" placeholder="Fecha de compra" wire:model="fechaCompra" id="fechaCompra">
                        <label for="fechaCompra" class="form-label">Fecha de compra</label>
                        <div class="invalid-feedback">
                            @error('fechaCompra')
                            {{ $message }}
                            @enderror
                        </div>
                        <script>
                            flatpickr("#fechaCompra", {
                                "locale": "es",
                                "enableTime": true,
                                "time_24hr": true
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Conceptos</h1>
        </div>

        <div class="mb-3">
            @foreach ($conceptos as $key => $articulo)
            <div class="row g-2 mb-1">
                <div class="col-sm-1">
                    <button wire:click="removeRow({{$key}})" class="btn btn-outline-danger oferta" type="button">
                        <span class="material-icons-outlined">
                            delete
                        </span>
                    </button>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating">
                        <input list="productos" class="form-control {{ $errors->has('conceptos.'.$key.'.producto') ? 'is-invalid' : '' }}" placeholder="Nombre del producto" wire:model="conceptos.{{$key}}.producto">
                        <label class="form-label">Producto</label>
                        <div class="invalid-feedback">
                            @error('conceptos.'.$key.'.producto')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-floating">
                        <input class="form-control {{ $errors->has('conceptos.'.$key.'.precio') ? 'is-invalid' : '' }}" placeholder="Precio" wire:model="conceptos.{{$key}}.precio">
                        <label class="form-label">Precio</label>
                        <div class="invalid-feedback">
                            @error('conceptos.'.$key.'.precio')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-floating">
                        <input class="form-control {{ $errors->has('conceptos.'.$key.'.cantidad') ? 'is-invalid' : '' }}" placeholder="Cantidad" wire:model="conceptos.{{$key}}.cantidad">
                        <label class="form-label">Cantidad</label>
                        <div class="invalid-feedback">
                            @error('conceptos.'.$key.'.cantidad')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating">
                        <input list="personas" class="form-control {{ $errors->has('conceptos.'.$key.'.persona') ? 'is-invalid' : '' }}" placeholder="Nombre de la persona" wire:model="conceptos.{{$key}}.persona">
                        <label class="form-label">Persona</label>
                        <div class="invalid-feedback">
                            @error('conceptos.'.$key.'.persona')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" class="btn-check" id="oferta.{{$key}}" autocomplete="off" wire:model="conceptos.{{$key}}.oferta">
                    <label class="btn btn-outline-success oferta" for="oferta.{{$key}}">
                        <span class="material-icons-outlined">
                            local_offer
                        </span>
                    </label>
                </div>
            </div>
            @endforeach

            <datalist id="productos">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->nombre }}">
                @endforeach
            </datalist>
            <datalist id="personas">
                @foreach ($personas as $persona)
                <option value="{{ $persona->nombre }}">
                    @endforeach
            </datalist>
        </div>
        <div class="d-grid gap-2 mb-3">
            <button wire:click="addRow" class="btn btn-outline-primary" type="button">
                <span class="material-icons-outlined">
                    add
                </span>
            </button>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
    </form>
</div>