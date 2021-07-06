<div>
    <livewire:header.header />
    <div class="container-fluid">
        <div class="row">
            <livewire:sidebar.sidebar key="{{ now() }}" :content="$this->content"/>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @if($this->content == 'tickets')
                    <livewire:pages.tickets />
                @endif
                @if($this->content == 'productos')
                    <livewire:pages.productos />
                @endif
                @if($this->content == 'personas')
                    <livewire:pages.personas />
                @endif
                @if($this->content == 'graficas')
                    <livewire:pages.graficas />
                @endif
                @if($this->content == 'establecimientos')
                    <livewire:pages.establecimientos />
                @endif
                @if($this->content == 'create_ticket')
                    <livewire:pages.creates.ticket />
                @endif
                @if($this->content == 'create_establecimiento')
                    <livewire:pages.creates.establecimiento />
                @endif
                @if($this->content == 'create_persona')
                    <livewire:pages.creates.persona />
                @endif
                @if($this->content == 'create_producto')
                    <livewire:pages.creates.producto />
                @endif
            </main>
        </div>
    </div>
</div>
