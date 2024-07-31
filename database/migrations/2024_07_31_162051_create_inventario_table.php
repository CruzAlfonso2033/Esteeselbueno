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
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_ticket');
            $table->foreignId('id_para');
            $table->foreignId('id_herramienta');



            $table->foreign('id_ticket')->references('id')->on('ticket')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_para')->references('id')->on('para')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_herramienta')->references('id')->on('herramienta')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
};
