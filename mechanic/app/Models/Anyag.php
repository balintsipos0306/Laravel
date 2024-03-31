<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anyag extends Model
{
    use HasFactory;
    protected $fillable = [
        'nev',
    ];
    public function munkalap(){
        return $this->hasMany(Munkalap::class, 'foreignKey');
    }
}
