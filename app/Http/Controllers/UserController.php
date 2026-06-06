<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{


    function info()
    {
        $collage = ['smit', 'smu', 'tu', 'PU', 'AMIT'];

        $name = ["ram", "bikram", "prajwal"];
        return view('info', ["nam" => $name[1], "collages" => $collage]);
    }

    function root()
    {
        $name = "Anil";
        return view('welcome', ["nam" => $name]);
    }


    //
    // function getuser()
    // {
    //     return 'calling getuser function. from usercontroller';
    // }

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
    function adduser(Request $data)
    {

        // echo "user add successfully";
        // echo "<br>";
        // echo "user name is $data->username";
        // echo "<br>";

        // echo "user email is $data->email";
        // echo "<br>";
        // echo "user password is $data->password";


        $data->validate([

            'username' => 'required |min:3 | max:20',
            'email' => 'required | email',
            'password' => 'required'
        ], [
            'username.required' => 'UserName Must Required',
            'username.min' => 'username must be more then 3 char ',
            'username.max' => 'username must be less then 20 char',
            'email.email' => 'Email id must required',
            'password.required' => 'Password must required'
        ]);
        return $data;
    }

    function loginform(Request $request)
    {
        echo $request->city;
        echo "<br/>";
        print_r($request->skill);
        // return $request;
    }

    function show()
    {
        return "student list";
    }
    function add()
    {
        return "add new student";
    }
    function delete()
    {
        return "user delete";
    }


    function users()
    {
        // return "user function";
        $users = DB::select('select * from users');
        return view('user', ['users' => $users]);
    }
    function getStudent()
    {
        $data = new \App\Models\Student;
        echo $data->testfun();
        $students = \App\Models\Student::all();
        return view('student', ['data' => $students]);
    }
    function apicalling()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('apipage', ['data' => json_decode($response)]);
    }
    function queries()
    {
        $result = DB::table('users')->get();
        // return $result;
        return view('queries', ['users' => $result]);
    }
}
