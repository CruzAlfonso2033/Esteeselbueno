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
        Schema::create('servicio_empleado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_users');
            $table->foreignId('id_servicio');

            $table->foreign('id_users')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_servicio')->references('id')->on('servicio')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_empleado');
    }
};
