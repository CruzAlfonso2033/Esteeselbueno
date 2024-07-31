<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('refaccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foto', 250)->nullable();
            $table->string('refaccion', 20)->nullable();
            $table->decimal('precioRefaccion', 6, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refaccion');
    }
};
