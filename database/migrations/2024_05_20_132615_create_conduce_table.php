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
        Schema::create('conduce', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camionero_id');
            $table->unsignedBigInteger('camion_id');
            $table->foreign('camionero_id')->references('id')->on('camioneros')->onDelete('cascade');
            $table->foreign('camion_id')->references('id')->on('camiones')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conduce');
    }
};
