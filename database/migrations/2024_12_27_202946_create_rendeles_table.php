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
        Schema::create('rendeles', function (Blueprint $table) {
            $table->id('rendeles_azon')->startingValue(10000);
            $table->unsignedBigInteger('profil');
            $table->foreign('profil')->references('azon')->on('profil')->onDelete('cascade');
            $table->dateTime('datum')->default('CURRENT_TIMESTAMP');
            $table->decimal('vegosszeg', 10, 2)->default(0.00);
            $table->char('rendeles_statusz', 3);
            $table->foreign('rendeles_statusz')->references('kod')->on('rendeles_statusz')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendeles');
    }
};
