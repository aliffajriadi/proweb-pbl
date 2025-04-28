<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PubliController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('contact', [HomeController::class, 'contact']);


Route::get('/welcome/{nama}', function ($nama) {
    return "Selamat datang di halaman welcome " . $nama;
});

Route::get('/profile', [UserController::class, 'profile_page']);

Route::get('/regis', [PubliController::class, 'register']);


Route::prefix('admin')->group(function (){
    Route::get('/dashboard', function () {
        return "Selamat datang di halaman admin dashboard";
    });
    Route::get('/users', function () {
        return "Selamat datang di halaman admin users";
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'listbarang']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/admin/dashboard', [AdminDashboardController::class, 'show']);
Route::get('/product', [ProductController::class,'tampilkan']);

Route::get('/publicdirectory', function(){
    return view('imageStyle');
});
