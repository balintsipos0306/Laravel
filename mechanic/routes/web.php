<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
    
});

<<<<<<< HEAD
Route::post('/login', [LoginController::class, 'authenticate']);
Route::delete('/logout', [LoginController::class, 'destroy']);

Route::get('/main', function () {
    return view('main');
});


/*Route::get('/login/newAccount', function () {
=======
Route::get('/addNewWork', function () {
>>>>>>> 83a0968750bc092a9f590d86cc331c0c0accb033
    return view('regist');
});*/