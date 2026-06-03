<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Viewcontroller;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/view', function () {   // '/view' can be any this. the home is the file name
//     return view('home');
// });

// redirect the page /view -> root page
Route::redirect('/view', '/');

Route::view('/about', 'about');

Route::get('/contract/{name}', function ($name) {
    // echo $name;
    return view('contract', ['name' => $name]);
});


Route::get('User', [UserController::class, 'getUser']);
Route::get('Name/{name}', [UserController::class, 'name']);
Route::get('userpage',[UserController::class, 'userpage']);


Route::get('Viewuser', [Viewcontroller::class, 'getUser']);
Route::get('Viewname', [Viewcontroller::class, 'name']);


