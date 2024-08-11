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
        Schema::create('servicio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fechaIngreso')->nullable();
            $table->string('foto', 100)->nullable();
            $table->string('descripcion', 150)->nullable();
            $table->decimal('precio', 6, 2)->nullable();
            $table->foreignId('id_tipo_servicio');
            $table->foreignId('id_status');
            $table->foreignId('id_gastos_servicio');

            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_status')->references('id')->on('status')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_gastos_servicio')->references('id')->on('gastos_servicios')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};
