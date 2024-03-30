<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Munkafelvevo extends Model
{
    use HasFactory;
    protected $fillable = [
        'azonosito',
        'nev',
        'password',
    ];
    public function munkalap(){
        return $this->HasMany(Munkalap::class);
    }
}