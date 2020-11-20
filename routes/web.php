<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/warga', function () {
    return view('warga.index');
});

Route::get('/retribusi', function () {
    return view('warga.retribusi');
});

Route::get('/bank_sampah', function () {
    return view('bank_sampah.index');
});

Route::get('/transaksi-bankSampah', function () {
    return view('bank_sampah.transaksi');
});

Route::get('/konversi', function () {
    return view('konversi.index');
});

Route::get('/kategori_sampah', function () {
    return view('kategori_sampah.index');
});

Route::get('/pengambilan', function () {
    return view('pengambilan.index');
});