<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{


    use HasFactory;

    protected $fillable = [
        'registroAbkc',
        'nombrePerro',
        'fnac',
        'sexo',
        'nomDueno',
        'direccion',
        'ciudad',
        'estado',
        'correo',
        'telefono',
        'otraRaza',
        'estandar',
        'sg',
        'bolsillo',
        'clasico',
        'muestraraza',
        'image',
    ];

}
