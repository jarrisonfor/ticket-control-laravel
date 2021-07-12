<?php

namespace App\Models;

class Establecimiento extends BaseModel
{

    public function establecimientos()
    {
        return $this->belongsToMany(Establecimiento::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
