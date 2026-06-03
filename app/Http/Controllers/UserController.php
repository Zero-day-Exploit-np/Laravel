<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{


    function info()
    {
        $name = "Anil";
        return view('info', ["nam" => $name]);
    }

    function root()
    {
        $name = "Anil";
        return view('welcome', ["nam" => $name]);
    }


    //
    function getuser()
    {
        return 'calling getuser function. from usercontroller';
    }

    function name($name)
    {
        return 'My name is ' . $name . ' from usercontroller';
    }

    function userpage()
    {
        return view('user');
    }


    function getusername($username)
    {
        return view('getusername', ['username' => $username]);
    }

    function adminlogin()
    {
        return view('admin.login');
    }

    function admininfo()
    {
        return view('admin.info');
    }

    function help()
    {
        return view('help');
    }

    function userhelp()
    {
        if (View::exists('userhelp')) {
            return view('userhelp');
        } else {
            echo ('page not found');
        }
    }
}
