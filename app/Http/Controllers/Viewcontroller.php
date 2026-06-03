<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class Viewcontroller extends Controller
{
    //
    function getuser()
    {
        return 'this finction is calling from viewcontroller';
    }

    function name()
    {
        return 'My name is bikram kumar das. form view controller.';
    }
}
