<?php

namespace App\Models;

class Producto extends BaseModel
{

    public function establecimientos()
    {
        return $this->belongsToMany(Establecimiento::class);
    }

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class)
        ->withPivot('precio', 'cantidad', 'oferta')
        ->withTimestamps();
    }

    public function personas()
    {
        return $this->belongsToMany(Persona::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
