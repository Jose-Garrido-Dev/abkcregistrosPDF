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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('registroAbkc', 80);
            $table->string('nombrePerro', 80);
            $table->date('fnac');
            $table->string('sexo', 80);
            $table->string('nomDueno', 80);
            $table->string('direccion', 150);
            $table->string('ciudad', 80);
            $table->string('estado', 80);
            $table->string('correo', 100);
            $table->string('telefono', 20);
            $table->string('otraRaza', 80);
            $table->string('estandar', 80);
            $table->string('sg', 80);
            $table->string('bolsillo', 80);
            $table->string('clasico', 80);
            $table->string('muestraraza', 80);
            $table->string('image',255)->default('default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

