<?php

namespace App\Models;

class Persona extends BaseModel
{

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

}
