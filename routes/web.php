<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\BatasAdminController;
use App\Http\Controllers\PertanianController;
use App\Http\Controllers\PLController;
use App\Http\Controllers\WisataController;


Route::get('/', function () { return view('welcome');});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/infografis', function () {return view('infografis');});
Route::get('/unduh', function () {return view('unduh');});

Route::get('/layanan-informasi', function () { return view('layananinformasi');});

Route::get('/petadesa', function () { return view('petadesa'); });

// Controller Routes
Route::apiResource('sarpras', SarprasController::class);
Route::apiResource('bangunan', BangunanController::class);
Route::apiResource('batas-admin', BatasAdminController::class);
Route::apiResource('pertanian', PertanianController::class);
Route::apiResource('pl', PLController::class);
Route::apiResource('wisata', WisataController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
