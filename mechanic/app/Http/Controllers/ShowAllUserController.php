<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowAllUserController extends Controller
{
    public function ShowAllUser(){
        $users = User::all();
        return view('dolgozok', compact('users'));
    }
}
