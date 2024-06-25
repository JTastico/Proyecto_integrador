<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'categoria_id', 'prioridad_id', 'fecha_creacion', 'fecha_actualizacion'
    ];

    protected $primaryKey = 'id';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class, 'prioridad_id');
    }
}
