<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;

Route::group(['prefix'=>'management/','as'=>'backend.'], function(){
    Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login.get');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix'=>'users/','as'=>'users.'], function() {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('create', [UsersController::class, 'create'])->name('create');
        Route::get('change_password', [UsersController::class, 'change_password'])->name('change_password');
        Route::get('detail/{id}', [UsersController::class, 'detail'])->name('detail');
        Route::post('store', [UsersController::class, 'store'])->name('store');
        Route::get('edit/{id}', [UsersController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [UsersController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [UsersController::class, 'delete'])->name('delete');
    });
});


