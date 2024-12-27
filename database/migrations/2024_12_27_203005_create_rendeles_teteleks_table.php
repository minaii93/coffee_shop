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
        Schema::create('rendeles_teteleks', function (Blueprint $table) {
            $table->tinyIncrements('pohar_id')->startingValue(1000); 
            $table->unsignedTinyInteger('rendeles_azon'); 
            $table->foreign('rendeles_azon')->references('id')->on('rendelesek')->onDelete('cascade');
            $table->decimal('tetel_osszeg', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendeles_teteleks');
    }
};
