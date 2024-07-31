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
        Schema::create('gastos_fijos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('importe', 6, 2)->nullable();
            $table->date('fechaGastosFijos')->nullable();

            $table->foreignId('id_elemento');
            
            $table->foreign('id_elemento')->references('id')->on('elemento')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_fijos');
    }
};
