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
        Schema::create('direccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Estado', 40)->nullable();
            $table->string('Municipio', 40)->nullable();
            $table->string('Colonia', 40)->nullable();
            $table->string('Calle', 40)->nullable();
            $table->integer('NumInt')->nullable();
            $table->integer('NumExterior')->nullable();
            $table->integer('CP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion');
    }
};
