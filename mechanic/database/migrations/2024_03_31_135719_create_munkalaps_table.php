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
        Schema::create('munkalaps', function (Blueprint $table) {
            $table->id();
            //$table->date("felvetel_idopontja");
            $table->string("rendszam", 7);
            $table->string("gyartmany");
            $table->integer("gyartas_eve");
            $table->string("tulajdonos_nev");
            $table->string("tulajdonos_cim");
            $table->string("munkakor");
            $table->string("szerelo");
            //Munkafolymat
            //$table->unsignedBigInteger("munkafolyamat_id");
            $table->foreignId('munkafolyamat_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();;

            //$table->unsignedBigInteger("alkatresz_id");
            $table->foreignId('alkatresz_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();;

            $table->string("alkatresz_mennyiseg");

            //$table->unsignedBigInteger("anyag_id");
            $table->foreignId('anyag_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string("anyag_mennyiseg");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('munkalaps');
    }
};
