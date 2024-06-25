<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function riesgos()
    {
        return $this->hasMany(Riesgo::class, 'prioridad_id');
    }
}
