<?php

namespace App\Models;

class Categoria extends BaseModel
{

    public function productos()
    {
        return $this->hasMany(Persona::class);
    }

}
