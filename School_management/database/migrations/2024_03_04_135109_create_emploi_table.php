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
        Schema::create('emploi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInterger('module_id');
            $table->unisgnedBigInteger('prof_id');
            $table->unsignedBigInteger('filiére_id');
            $table->string('salleNum');
            $table->string('day');
            $table->time('startTime');
            $table->time('endTime');
            $table->timestamps();
     
            //db ghandouzou les foreign key 

            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('prof_id')->references('id')->on('profs');
            $table->foreign('filiére_id')->references('id')->on('filiéres');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi');
    }
};
