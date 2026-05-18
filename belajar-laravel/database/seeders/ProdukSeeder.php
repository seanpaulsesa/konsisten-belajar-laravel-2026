<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query untuk menambah data
       DB::table('tb_produk')->insert([
    [
        'nama_produk'=>'Laptop',
        'harga'=>1500000,
        'deskripsi_produk'=>'ini adalah sebuah deskripsi dummy',
        'kategori_id'=>'2',
        'created_at'=>now()
    ],
    [
        'nama_produk'=>'Mouse',
        'harga'=>50000,
        'deskripsi_produk'=>'ini adalah sebuah deskripsi dummy',
        'kategori_id'=>'2',
        'created_at'=>now()
    ],
    [
        'nama_produk'=>'Laptop Lenovo Thinkpad',
        'harga'=>800000,
        'deskripsi_produk'=>'ini adalah sebuah deskripsi dummy',
        'kategori_id'=>'2',
        'created_at'=>now()
    ]
]);
    }
}
