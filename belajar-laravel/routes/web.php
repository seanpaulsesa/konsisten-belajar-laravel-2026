<?php

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
Route::view('/product','pages.product');
