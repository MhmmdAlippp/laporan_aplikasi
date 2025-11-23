<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('data-aplikasi');
});

Route::get('/form-pengecekan', function () {
    return view('form-pengecekan');
});

Route::get('/rekap-bulanan', function () {
    return view('rekap-bulanan');
});