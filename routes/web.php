<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfografisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/infografis', function () {
    return view('infografis');
});
Route::get('/unduh', function () {
    return view('unduh');
});

Route::get('/layanan-informasi', function () {
    return view('layananinformasi'); // Memanggil file resources/views/layananinformasi.blade.php
});

Route::get('/petadesa', function () {
    return view('petadesa'); // Sesuaikan dengan nama file blade peta Anda
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
