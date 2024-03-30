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
            //csatlakozások és a tábla alapvető dolgai
            $table->id();
            $table->foreignId("munkafelvevo_azonosito")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->date("felvetel_idopontja");
            $table->string("szerelo_azonosito");
            //autó adatai
            $table->string("rendszam", 6);
            $table->string("gyartmany");
            $table->integer("gyartas_eve");
            $table->string("tuajdonos_nev");
            $table->string("tulajdonos_cim");
            //Munkafolymat
            $table->foreignId("munkafolymat_id")->constrained()->onUpdate("cascade")->onDelete("cascade");;
            $table->foreignId("alkatresz_id")->constrained()->onUpdate("cascade")->onDelete("cascade");;
            $table->string("alkatresz_mennyiseg");
            $table->foreignId("anyag_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->string("anyag_mennyiseg");
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
