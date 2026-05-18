<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // inisialisasi tabel produk
    protected $table = 'tb_produk';

    // inisialisasi primary eky di dalam tabel
    protected $fillable = ['nama_produk','harga','stok'];

    // inisialisasi data yang dapat kita isi
    // protected $fillable = ['nama_produk','harga','stok'];
    // inisialisasi data yang dapat kita isi
    protected $guarded = [];
}
