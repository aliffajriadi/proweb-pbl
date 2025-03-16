<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index']);
Route::get('contact', [HomeController::class, 'contact']);


Route::get('/welcome/{nama}', function ($nama) {
    return "Selamat datang di halaman welcome " . $nama;
});

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', function () {
        return "Selamat datang di halaman admin dashboard";
    });
    Route::get('/users', function () {
        return "Selamat datang di halaman admin users";
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'listbarang']); 

Route::get('/login', [LoginController::class, 'login']);