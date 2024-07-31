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
        Schema::create('tienda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img', 250)->nullable();
            $table->string('Producto', 20)->nullable();
            $table->string('Marca', 20)->nullable();
            $table->string('Descripcion', 150)->nullable();
            $table->decimal('Precio', 6, 2)->nullable();
            $table->integer('Cantidad')->nullable();
            $table->foreignId('id_categoria');
            
            $table->foreign('id_categoria')->references('id')->on('categoria')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tienda');
    }
};
