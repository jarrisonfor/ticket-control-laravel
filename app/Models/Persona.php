<?php

namespace App\Models;

class Persona extends BaseModel
{

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class, 'producto_ticket')
            ->withPivot('precio', 'cantidad', 'oferta', 'producto_id')
            ->withTimestamps();
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_ticket')
            ->withPivot('precio', 'cantidad', 'oferta', 'ticket_id')
            ->withTimestamps();
    }

}
