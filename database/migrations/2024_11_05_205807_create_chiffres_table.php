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
        Schema::create('chiffres', function (Blueprint $table) {
            $table->id();
            $table->integer('num_beneficiaire')->nullable(); 
            $table->integer('num_jeunes')->nullable(); 
            $table->integer('num_projets')->nullable(); 
            $table->integer('num_initiatives')->nullable(); 
            $table->timestamp('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chiffres');
    }
};
