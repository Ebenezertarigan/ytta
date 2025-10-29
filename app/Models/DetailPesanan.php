<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan';
    protected $fillable = ['pesanan_id', 'produk_id', 'jumlah', 'harga_satuan', 'subtotal'];

    // Relasi: setiap detail pesanan dimiliki oleh satu pesanan
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }

    // Relasi: setiap detail pesanan memiliki satu produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
