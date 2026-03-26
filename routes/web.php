<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/profil', 'pages.profil')->name('profil');
Route::view('/layanan', 'pages.layanan')->name('layanan');
Route::view('/berita', 'pages.berita')->name('berita');
Route::view('/galeri', 'pages.galeri')->name('galeri');
Route::view('/kontak', 'pages.kontak')->name('kontak');