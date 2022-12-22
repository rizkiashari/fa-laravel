<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('keranjang', [
            'title' => 'Keranjang'
        ]);
    }

    public function addToCart(Request $request)
    {
        $produk = Produk::find($request->id_produk);

        $cart = Cookie::get('cart');
        if ($produk) {
            if ($cart) {
                $cart = json_decode($cart, true);
                $cart[$produk->id] = [
                    'id' => $produk->id,
                    'nama' => $produk->nama,
                    'harga' => $produk->harga,
                    'stok' => $produk->stok,
                    'deskripsi' => $produk->deskripsi,
                    'url_image' => $produk->url_image,
                    'kode_barang' => $produk->kode_barang,
                    'qty' => $cart[$produk->id]['qty'] + 1
                ];
            } else {
                $cart = [
                    $produk->id => [
                        'id' => $produk->id,
                        'nama' => $produk->nama,
                        'harga' => $produk->harga,
                        'stok' => $produk->stok,
                        'deskripsi' => $produk->deskripsi,
                        'url_image' => $produk->url_image,
                        'kode_barang' => $produk->kode_barang,
                        'qty' => $request->qty
                    ]
                ];
            }
            $cookie = cookie('cart', json_encode($cart), 60);
            return redirect()->back()->cookie($cookie);
        }
    }
}
