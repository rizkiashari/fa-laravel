<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all()->take(4);
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'produk' => $produk
        ]);
    }
}
