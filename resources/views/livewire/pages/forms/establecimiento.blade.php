<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            <span wire:click="principal()" class="material-icons-outlined return">
                arrow_back
            </span>
            Añadir Establecimiento
        </h1>
    </div>
    <form wire:submit.prevent="submit">
        <input type="hidden" wire:model="modelId">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del establecimiento" wire:model="nombre">
            <div class="invalid-feedback">
                @error('nombre')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div id='map' class='mb-3'></div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-primary">Limpiar</button>
    </form>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiamFycmlzb25mb3IiLCJhIjoiY2s5dTgzcHJ2MWxmazNscWNiZTNqejVmMSJ9.Kx6SuMzI8MZ12SAwZnZ_0w';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/jarrisonfor/ckr9fhiwt29tq18p0v45it790',
            center: [-13.51360853, 28.98836581],
            zoom: 16
        });
        var marker = new mapboxgl.Marker()
            .setLngLat([-13.51360853, 28.98836581])
            .addTo(map);
    </script>
</div>
