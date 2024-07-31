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
        Schema::create('gastos_totales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('total', 6, 2)->nullable();
            $table->date('fechaTotal')->nullable();

            $table->foreignId('id_gastos_servicios');
            $table->foreignId('id_gastos_fijos');
            
            $table->foreign('id_gastos_servicios')->references('id')->on('gastos_servicios')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_gastos_fijos')->references('id')->on('gastos_fijos')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_totales');
    }
};
