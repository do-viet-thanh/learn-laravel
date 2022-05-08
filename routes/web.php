<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('auth')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::prefix('users')->group(function() {
    Route::get('/home', [UsersController::class, 'index'])->name('users.list');
    Route::get('/creat', [UsersController::class, 'creat'])->name('user.creat');
    Route::post('/store', [UsersController::class, 'store'])->name('user.store');
    Route::get('/edit{', [UsersController::class, 'edit'])->name('user.edit');
    Route::post('/update', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/delete{id}', [UsersController::class, 'delete'])->name('user.delete');
});

