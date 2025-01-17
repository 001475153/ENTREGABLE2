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
        Schema::create('inquilino__alquiler', function (Blueprint $table) {
            $table->foreignID('inquilino_id')->constrained('inquilinos')->onDelete('cascade');
            $table->foreignID('alquiler_id')->constrained('alquileres')->onDelete('cascade');
            $table->primary(['inquilino_id', 'alquiler_id']);
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquilino__alquiler');
    }
};
