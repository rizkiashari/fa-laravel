<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk', [
            'title' => 'Produk',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'url_image' => 'required',
            'kode_barang' => 'required'
        ]);

        $produk = new Produk();
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->url_image = $request->url_image;
        $produk->kode_barang = $request->kode_barang;
        $produk->save();

        return redirect('/');
    }
}
