<?php

namespace App\Models;

class Ticket extends BaseModel
{

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class)
            ->withPivot('precio', 'cantidad', 'oferta')
            ->withTimestamps();
    }

}
