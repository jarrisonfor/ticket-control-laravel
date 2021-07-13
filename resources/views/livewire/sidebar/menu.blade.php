<li class="nav-item">
    <a class="nav-link {{ Route::is($this->text . '*') ? 'active' : '' }}" aria-current="page" href="{{$this->text}}">
        <span class="material-icons-outlined">{{$this->icon}}</span>
        {{ucfirst($this->text)}}
    </a>
</li>