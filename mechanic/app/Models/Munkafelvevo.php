<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Munkafelvevo extends Model
{
    use HasFactory;
   /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $fillable = [
        'nev',
        'password',
        'azonosito',
    ];
    public function munkalap(){
        return $this->hasMany(Munkalap::class, 'foreignKey');
    }
}
