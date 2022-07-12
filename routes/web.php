<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ContactController

};

require __DIR__.'/auth.php';

            //  cliente sem conta

//Home

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

            //Usuario Autenticado

//usuários

Route::middleware(['auth'])->group(function (){

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::post('/contacts/{id}/edit', [ContactController::class, 'update'])->name('contacts.update');

Route::get('/contacts/{id}/show', [ContactController::class, 'show'])->name('contacts.idGet');

Route::delete('/contacts/{id}/remove', [ContactController::class, 'remove'])->name('contacts.remove');

});