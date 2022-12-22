<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'harga', 'stok', 'deskripsi', 'url_image', 'kode_barang'];

    public function transaksi()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
}
