<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->boolean('cargar_datos')->default(false);
            $table->string('indicadores_creados')->nullable();
            $table->string('organizacion');
            $table->string('sede');
            $table->string('frecuencia')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('responsable_seguimiento');
            $table->string('responsable_medicion');
            $table->json('resultados_visibles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores');
    }
}
