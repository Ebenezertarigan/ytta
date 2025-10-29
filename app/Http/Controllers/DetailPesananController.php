<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;

class DetailPesananController extends Controller
{
    public function index()
    {
        $detail = DetailPesanan::with(['pesanan', 'produk'])->get();
        return view('detail_pesanan.index', compact('detail'));
    }
}

