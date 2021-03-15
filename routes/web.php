<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('users/', [UserController::class, 'index']);

Auth::routes();
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\HomeController::class, 'buku'])->name('buku')->middleware('auth');

// Router::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])
//     ->name('admin.home')
//     ->middleware('id_admin');
