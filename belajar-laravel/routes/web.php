<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about',[

        'nama'=>'Paulus Sesa',
        'umur'=>25,
        'alamat'=>'Maybrat',
    ]);
});

Route::view('/contact', 'pages.contact');

// satu controller bisa punya banyak method
Route::get('/product', [ProdukController::class,'getProduk']);
Route::get('/product/tambah', [ProdukController::class,'tambahProduk']);
