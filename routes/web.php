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
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/ruangan', function () {
    return view('ruangan');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});