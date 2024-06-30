<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    use HasFactory;

    protected $table = 'indicadores';

    protected $fillable = [
        'denominacion',
        'cargar_datos',
        'indicadores_creados',
        'organizacion',
        'sede',
        'normas',
        'resultado_min',
        'resultado_max',
        'unidad_valor',
        'frecuencia',
        'fecha_inicio',
        'fecha_fin',
        'responsable_seguimiento',
        'responsable_medicion',
        'resultados_visibles',
    ];

    protected $casts = [
        'resultados_visibles' => 'array',
    ];

    public $timestamps = false;
}
