<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowAllUserController;
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

Route::delete('/logout', [LoginController::class, 'destroy']);
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/dolgozok', [ShowAllUserController::class, 'ShowAllUser']);

//->middleware("CustomAuth");

Route::middleware('CustomAuth')->group(function () {
    Route::get('/main', function () {
        return view('main');
    });

    Route::get('/munkafolyamat', function(){
        return view("munkafolyamat_felvetel");
    });

    Route::Get('/dolgozok', function(){
        return view("dolgozok");
    });

    Route::Get('/anyag', function(){
        return view("material");
    });

    Route::Get('/alkatresz', function(){
        return view("part");
    });
});