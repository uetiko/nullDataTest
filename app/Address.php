<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'calle', 'estado', 'delegacion_municipio', 'numero_ext', 'cp'
    ];
}
