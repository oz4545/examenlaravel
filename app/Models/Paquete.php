<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = ['codigo', 'descripcion', 'destinatario', 'direccion'];

    public function camioneros()
    {
        return $this->belongsToMany(Camionero::class, 'distribuye');
    }
}
