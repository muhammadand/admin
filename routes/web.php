<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.index');
});



Route::get('polling', [AdminController::class, 'poling'])->name('polling');
Route::get('survei', [AdminController::class, 'survei'])->name('survei');
Route::get('data_warga', [AdminController::class, 'data_warga'])->name('data_warga');
Route::get('jadwal', [AdminController::class, 'jadwal'])->name('jadwal');
Route::get('login', [AdminController::class, 'login'])->name('login');
Route::get('register', [AdminController::class, 'register'])->name('register');
