<?php

namespace App\Models;

class Persona extends BaseModel
{

    protected $fillable = [
        'nombre',
    ];

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

}
