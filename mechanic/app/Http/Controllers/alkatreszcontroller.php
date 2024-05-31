<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alkatresz;

class alkatreszcontroller extends Controller
{
    public function store(Request $request){
        $request ->validate([
            'nev' => 'required|string|max:255',
        ]);

        Alkatresz::create([
            'nev' => $request->nev,
        ]);

        return(redirect()->back()->with('success','Anyag sikeresen létrehozva'));
    }
}
