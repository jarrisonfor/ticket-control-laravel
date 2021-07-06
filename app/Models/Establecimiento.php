<?php

namespace App\Models;

class Establecimiento extends BaseModel
{

    protected $fillable = [
        'nombre',
    ];

    public function establecimientos()
    {
        return $this->belongsToMany(Establecimiento::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
