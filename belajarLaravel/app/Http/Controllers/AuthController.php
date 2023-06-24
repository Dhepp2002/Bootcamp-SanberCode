<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function signin(Request $request)
    {
        $FirstName = $request->input('firstname');
        $LastName = $request->input('lastname');

        return view('welcome', ["FirstName" => $FirstName, "LastName" => $LastName]);
    }
}
