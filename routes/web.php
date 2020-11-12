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

Route::get('/bankSampah', function () {
    return view('bankSampah.index');
});

Route::get('/transaksi-bankSampah', function () {
    return view('bankSampah.transaksi');
});

Route::get('/konversi', function () {
    return view('konversi.index');
});
