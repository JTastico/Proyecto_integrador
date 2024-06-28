<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('riesgos', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->text('description');
        //     $table->timestamps();
        // });
        Schema::create('riesgos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->string('estado');
            $table->date('fecha');
            $table->string('organizacion');
            $table->string('sede');
            $table->string('norma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riesgos');
    }
};
