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
        Schema::create('absence_prof', function (Blueprint $table) {
            $table->integer('MasseHoraire');
            $table->unsignedBigInteger('Prof');
            $table->foreign('Prof')->references('id_prof')->on('profs')->cascadeOnDelete();
            $table->date('Date');
            $table->boolean('Justifiée');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abscence_prof');
    }
};
