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
        Schema::create('herramientas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('elemento', 20)->nullable();
            $table->string('fotoHerramienta', 20)->nullable();
            $table->integer('cantidad')->nullable();
            $table->decimal('costo', 6, 2)->nullable();
            $table->string('vidaUtil', 40)->nullable();
            $table->string('marca', 20)->nullable();
            $table->string('modelo', 20)->nullable();
            $table->string('caracteristicas', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herramientas');
    }
};
