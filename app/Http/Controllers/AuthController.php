<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginGet()
    {
        return view("signin", [
            "title" => "Sign In"
        ]);
    }

    public function loginStore(Request $request)
    {
    }

    public function registerGet()
    {
        return view("signup", [
            "title" => "Sign Up"
        ]);
    }

    public function registerStore(Request $request)
    {
        $valid = $request->validate([
            "username" => ["required", "string"],
            "email" => ["required", "unique:users,email"],
            "password" => ["required", "min:8"],
            "fullname" => ["required", "string"],
        ], [
            "username.required" => "Username tidak boleh kosong",
            "email.required" => "Email tidak boleh kosong",
            "email.unique" => "Email sudah terdaftar",
            "email.email" => "Email tidak valid",
            "password.required" => "Password tidak boleh kosong",
            "password.min" => "Password minimal 8 karakter",
            "fullname.required" => "Nama lengkap tidak boleh kosong",
        ]);

        $valid['password'] = bcrypt($valid['password']);

        User::create($valid);

        return redirect("/login")->with("success", "Berhasil mendaftar, silahkan login");
    }
}
