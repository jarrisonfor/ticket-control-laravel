<li class="nav-item">
    <a wire:click="change()" class="nav-link {{ ($this->active) ? 'active' : '' }}" aria-current="page" href="#">
        <span class="material-icons-outlined">{{$this->icon}}</span>
        {{ucfirst($this->text)}}
    </a>
</li>