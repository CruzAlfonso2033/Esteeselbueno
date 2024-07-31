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
        Schema::create('gastos_servicios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('gasolina', 6, 2)->nullable();
            $table->decimal('caseta', 6, 2)->nullable();
            $table->decimal('ayudante', 6, 2)->nullable();
            $table->decimal('alimentos', 6, 2)->nullable();
            $table->foreignId('id_refaccion');
            
            $table->foreign('id_refaccion')->references('id')->on('refaccion')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_servicios');
    }
};
