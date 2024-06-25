<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion_indicador');
            $table->string('organizacion');
            $table->string('sede');
            $table->string('frecuencia_medicion');
            $table->date('fecha_medicion');
            $table->string('responsable_seguimiento');
            $table->string('responsable_medicion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indicadores');
    }
}