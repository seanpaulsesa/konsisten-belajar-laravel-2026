<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produk;

// Di Buat Oleh Paulus Sesa

class ProdukController extends Controller
{
    public function index(){
        $data_toko = [
            'nama_toko'=>'Makmur Jaya Abadi',
            'alamat'=>'Sorong, Papua Barat, Indonesia',
            'type'=>'Ruko'
        ];
        return view('pages.produk.show');
    }
    public function tambahProduk(){
        return view('pages.addProduct');
    }
}
