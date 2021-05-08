<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show(){
        return "Hello from Controller";
    }
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:3'
        ]);
        // echo "form Submitted";
        return $req->input();
    }
}
