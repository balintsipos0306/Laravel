<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Middleware\CustomAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
    
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::delete('/logout', [LoginController::class, 'destroy']);

//->middleware("CustomAuth");

Route::middleware('CustomAuth')->group(function () {
    Route::get('/main', function () {
        return view('main');
    });

    Route::get('/munkafolyamat_felvetel', function(){
        return view("munkafolyamat_felvetel");
    });
});