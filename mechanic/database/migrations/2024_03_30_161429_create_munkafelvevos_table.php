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
        Schema::create('munkafelvevos', function (Blueprint $table) {
            $table->string("azonosito", 6)->primary();
            $table->string("nev");
            //$table->foreignId("Szerelo_Azonosito")->constrained()->onUpdate("cascade")->onDelete("cascade"); foreing key
            $table->string("jelszo")->password_hash();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('munkafelvevos');
    }
};