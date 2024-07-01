<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    use HasFactory;

    protected $fillable = [
        'denominacion',
        'organizacion',
        'dimensiones_seguridad',
        'criterio_evaluacion',
        'normas_objetivos',
        'sedes',
        'procesos',
        'cuestionario',
    ];

    protected $casts = [
        'normas_objetivos' => 'array',
        'sedes' => 'array',
        'procesos' => 'array',
    ];
}