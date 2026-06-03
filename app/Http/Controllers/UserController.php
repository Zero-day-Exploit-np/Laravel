<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class UserController extends Controller
{
    //
    function getuser()
    {
        return 'calling getuser function. from usercontroller';
    }

    function name($name)
    {
        return 'My name is ' . $name . ' from usercontroller';
    }

    function userpage(){
        return view('user');
    }
}
