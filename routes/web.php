<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Viewcontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/view', function () {   // '/view' can be any this. the home is the file name
    return view('home');
});

// redirect the page /view -> root page
// Route::redirect('/view', '/');

Route::view('/about', 'about');

Route::get('/contract/{name}', function ($name) {
    // echo $name;
    return view('contract', ['name' => $name]);
});

Route::view('/helppage', 'help');
Route::view('user-form', 'user-form');

Route::get('User', [UserController::class, 'getUser']);
Route::get('Name/{name}', [UserController::class, 'name']);
Route::get('userpage', [UserController::class, 'userpage']);
Route::get('Username/{name}', [UserController::class, 'getusername']);
Route::get('adminlogin', [UserController::class, 'adminlogin']);
Route::get('admininfo', [UserController::class, 'admininfo']);
Route::get('help', [UserController::class, 'help']);
Route::get('userhelp', [UserController::class, 'userhelp']);
Route::get('info', [UserController::class, 'info']);
Route::get('/', [UserController::class, 'root']);
Route::post('adduser', [UserController::class, 'adduser']);


Route::get('Viewuser', [Viewcontroller::class, 'getUser']);
Route::get('Viewname', [Viewcontroller::class, 'name']);
