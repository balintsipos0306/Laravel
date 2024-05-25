<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Munkalap extends Model
{
    use HasFactory;
    protected $fillable = [
        'felvetel_idopontja',
        // //autó adatai
        'rendszam',
        'gyartmany',
        'gyartas_eve',
        'tulajdonos_nev',
        'tulajdonos_cim',
        // //Munkafolymat
        'alkatresz_mennyiseg',
        'anyag_mennyiseg'
    ];
    // $table->foreignId("munkafolymat_id")->constrained()->onUpdate("cascade")->onDelete("cascade");;
    public function munkafolyamat()
    {
        return $this->belongsTo(Munkafolyamat::class);
    }
    // $table->foreignId("alkatresz_id")->constrained()->onUpdate("cascade")->onDelete("cascade");;
    public function alkatresz()
    {
        return $this->belongsTo(Alkatresz::class);
    }
    // $table->foreignId("anyag_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
    public function anyag()
    {
        return $this->belongsTo(Anyag::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
