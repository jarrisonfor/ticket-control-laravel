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
            ->withPivot('precio', 'cantidad', 'oferta', 'persona_id')
            ->withTimestamps();
    }

    public function personas()
    {
        return $this->belongsToMany(Persona::class, 'producto_ticket')
            ->withPivot('precio', 'cantidad', 'oferta', 'ticket_id')
            ->withTimestamps();
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
