<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'harga', 'stok', 'deskripsi', 'url_image'];

    public function transaksi()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
}
