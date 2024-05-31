<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anyag;
use Symfony\Contracts\Service\Attribute\Required;

class anyagcontroller extends Controller
{
    public function store(Request $request){
        $request ->validate([
            'nev' => 'required|string|max:255',
        ]);

        Anyag::create([
            'nev' => $request->nev,
        ]);

        return(redirect()->back()->with('success','Anyag sikeresen létrehozva'));
    }
}
