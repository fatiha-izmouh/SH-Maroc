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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->date('date_naissance');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('ville');
            $table->string('specialite');
            $table->string('domaine_projet');
            $table->string('situation_professionnelle');
            $table->string('duree_idee');
            $table->text('objectif');
            $table->text('attentes');
            $table->text('formation_description');
            $table->string('confiance_projet');
            $table->string('engagement_programme');
            $table->string('statut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
