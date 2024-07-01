<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->string('organizacion');
            $table->string('dimensiones_seguridad');
            $table->string('criterio_evaluacion');
            $table->json('normas_objetivos');
            $table->json('sedes');
            $table->json('procesos');
            $table->text('cuestionario')->nullable();
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
        Schema::dropIfExists('riesgos');
    }
}
