<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Viewcontroller;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;




Route::middleware('Setlang')->group(function () {


    Route::get('setlang/{lang}', function ($lang) {
        Session::put('lang', $lang);
        return redirect('/');
    });
    Route::get('/', function () {
        return view('welcome');
    });
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





Route::middleware('check1')->group(function () {

    Route::view('helppage', 'help');
    Route::view('user-form/profile/dasboard', 'user-form')->name('userform');

    Route::view('system/{name}', 'system');
    Route::view('system1', 'system');
});




Route::get('users', [UserController::class, 'users']);
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

// Route::view('student', 'student');
Route::get('student', [UserController::class, 'getStudent']);



Route::get('Viewuser', [Viewcontroller::class, 'getUser']);
Route::get('Viewname', [Viewcontroller::class, 'name'])->middleware(Agecheck::class, CountryCheck::class);

Route::view('user-login', 'userlogin');
Route::post('login-form', [UserController::class, 'Loginform']);


Route::prefix('student')->group(function () {

    Route::get('show', [UserController::class, 'show']);
    Route::get('delete', [UserController::class, 'delete']);
    Route::get('add', [UserController::class, 'add']);
});


Route::controller(UserController::class)->group(function () {

    Route::get('User',  'getUser');
    Route::get('Name/{name}',  'name');
    Route::get('userpage',  'userpage');
    Route::get('Username/{name}', 'getusername');
    Route::get('adminlogin',  'adminlogin');
    Route::get('admininfo',  'admininfo');
    Route::get('help',  'help');
    Route::get('userhelp',  'userhelp');
    Route::get('info',  'info');
    Route::get('/',  'root');
    Route::post('adduser',  'adduser');
});


Route::get('apipage', [UserController::class, 'apicalling']);
Route::get('database', [UserController::class, 'queries']);

Route::view('login', 'login');
Route::post('login', [UserController::class, 'login']);

Route::view('profile', 'profile');


Route::get('logout', [UserController::class, 'logout']);
// Route::view('logout', 'logout');
