<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk', [
            'title' => 'Produk'
        ]);
    }

    public function create(Request $request)
    {
    }
}
