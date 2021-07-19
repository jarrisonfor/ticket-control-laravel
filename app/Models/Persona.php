<?php

namespace App\Models;

class Persona extends BaseModel
{

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class)
            ->withPivot('precio', 'cantidad', 'oferta')
            ->withTimestamps();
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class)
            ->withPivot('precio', 'cantidad', 'oferta')
            ->withTimestamps();
    }

}
