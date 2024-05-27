<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    protected $fillable = ['marca', 'modelo', 'anio', 'placa'];

    public function camioneros()
    {
        return $this->belongsToMany(Camionero::class, 'conduce');
    }
}

