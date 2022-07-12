<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,

};

require __DIR__.'/auth.php';

            //  cliente

//Home

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

            //Usuario Autenticado

//usuários

Route::middleware(['auth', 'is_admin'])->group(function (){



Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/login', [UserController::class, 'login'])->name('users.login');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users/create', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::post('/users/{id}/edit', [UserController::class, 'update'])->name('users.update');

Route::get('/users/{id}/show', [UserController::class, 'idGet'])->name('users.idGet');

Route::delete('/users/{id}/remove', [UserController::class, 'remove'])->name('users.remove');

});