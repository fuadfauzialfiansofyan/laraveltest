<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('halaman.register');
    }

    public function welcome(Request $request ){
        $fname = $request['fname'];
        $lname = $request['lname'];
        

        return view('halaman.welcome', compact('fname','lname'));
    }
}
