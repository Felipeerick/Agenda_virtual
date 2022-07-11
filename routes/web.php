<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,

};

//Home
Route::get('/', function () {
    return view('welcome');
});

//usuários

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users/create', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{id}', [UserController::class, 'idGet'])->name('users.id');