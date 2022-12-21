<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id_user',  'total_transaksi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
