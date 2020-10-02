<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello(){
       $msg = "Hello World";
        return response()->json($msg,200);
    }
}
