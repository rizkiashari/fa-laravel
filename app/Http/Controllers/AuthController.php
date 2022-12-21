<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginGet()
    {
        return view("signin", [
            "title" => "Sign In"
        ]);
    }

    public function registerGet()
    {
        return view("signup", [
            "title" => "Sign Up"
        ]);
    }
}
