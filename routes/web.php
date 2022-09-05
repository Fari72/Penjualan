<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController
};

Route::get('/', function () {
    return view('home');
});

Route::get('/barang', function () {
    return view('barang.index');
});

//Route Kategori
Route::resource('/kategori',KategoriController::class);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

Route::get('/supplier', function () {
    return view('supplier.index');
});

Route::get('/pembeli', function () {
    return view('pembeli.index');
});

Route::get('/pembelian', function () {
    return view('pembelian.index');
});

Route::get('/penjualan', function () {
    return view('penjualan.index');
});