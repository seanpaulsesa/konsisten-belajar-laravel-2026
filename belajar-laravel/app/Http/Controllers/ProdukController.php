<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function getProduk(){
        $data_toko = [
            'nama_toko'=>'Makmur Jaya Abadi',
            'alamat'=>'Bondowoso, Jawa Timur',
            'type'=>'Ruko'
        ];
        return view('pages.product',$data_toko);
    }
    public function tambahProduk(){
        return view('pages.addProduct');
    }
}
