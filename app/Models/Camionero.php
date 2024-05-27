<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    protected $fillable = ['dni', 'poblacion', 'nombre', 'telefono', 'direccion', 'salario'];

    public function paquetes()
    {
        return $this->belongsToMany(Paquete::class, 'distribuye');
    }

    public function camiones()
    {
        return $this->belongsToMany(Camion::class, 'conduce');
    }
}

