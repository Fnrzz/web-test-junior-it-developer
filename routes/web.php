<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('soal1');
Route::get('/soal2', [HomeController::class, 'soal2'])->name('soal2');
Route::get('/soal3', [HomeController::class, 'soal3'])->name('soal3');
