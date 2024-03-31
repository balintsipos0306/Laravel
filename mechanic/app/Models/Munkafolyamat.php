<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Munkafolyamat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nev',
        'idotartam',
    ];
    public function munkalap(){
        return $this->hasMany(Munkalap::class, 'foreignKey');
    }
}
