<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Munkalap;

class munkalapcontroller extends Controller
{
    public function store(Request $request){
        $request ->validate([
            'munkakor' => 'required|string|max:255',
            'rendszam'=> 'required|string|max:7',
            'gyartmany'=>'required|string|max:255',
            'gyartas_eve'=> 'required|int',
            'tulajdonos_nev' => 'required|string|string:255',
            'tulajdonos_cim' => 'required|string|max:255',
            'szerelo'=> 'required|string|max:255',
            'anyag_id' => 'required|int',
            'alkatresz_id' => 'required|int',
            'alkatresz_mennyiseg'=> 'required|string',
            'anyag_mennyiseg' => 'required|string',
            'munkafolyamat_id' => 'required|int'
        ]);

        Munkalap::create([
            //'nev' => $request->nev,
            'rendszam' => $request->rendszam,
            'gyartmany' => $request->gyartmany,
            'gyartas_eve' => $request->gyartas_eve,
            'tulajdonos_nev' => $request->tulajdonos_nev,
            'tulajdonos_cim' =>$request->tulajdonos_cim,
            'munkakor' => $request->munkakor,
            'szerelo' => $request ->szerelo,
            'munkafolyamat_id' => $request->munkafolyamat_id,
            'alkatresz_id' => $request->alkatresz_id,
            'alkatresz_mennyiseg' =>$request->alkatresz_mennyiseg,
            'anyag_id' => $request->anyag_id,
            'anyag_mennyiseg' => $request->anyag_mennyiseg
        ]);

        return(redirect()->back()->with('success','Munkalap sikeresen létrehozva'));
    }
}
