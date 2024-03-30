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
        Schema::create('munkalap', function (Blueprint $table) {
            $table->id();
            $table->foreignId("munkafelvevo_azonosito")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->date("felvetel_idopontja");
            $table->string("szerelo_azonosito");
            $table->string("rendszam");
            $table->string("gyartmany");
            $table->integer("gyartas_eve");
            $table->string("tuajdonos_nev");
            $table->string("tulajdonos_cim");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('munkalap');
    }
};
