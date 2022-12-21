<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi',
        'id_diskon',
        'id_produk',
        'jumlah',
        'harga',
        'subtotal',
        'qty'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id');
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::class, 'id_diskon', 'id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk
', 'id');
    }
}
