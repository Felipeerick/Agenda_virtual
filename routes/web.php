<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CommitmentsController,
    ContactController,
    ErroController

};

require __DIR__.'/auth.php';

            //  cliente sem conta

//Home

Route::get('/', function () {
    return view('welcome');
});

//Error
Route::get('/error', [ErroController::class, 'errorView'])->name('errors.notAllowed');
       
                        //Usuario Autenticado


Route::middleware(['auth'])->group(function (){

Route::get('/commitments', [CommitmentsController::class, 'index'])->name('commitments.index');

Route::get('/commitments/create', [CommitmentsController::class, 'create'])->name('commitments.create');

Route::post('/commitments/store', [CommitmentsController::class, 'store'])->name('commitments.store');

Route::get('/commitments/{id}/edit', [CommitmentsController::class, 'edit'])->name('commitments.edit');

Route::post('/commitments/{id}/edit', [CommitmentsController::class, 'update'])->name('commitments.update');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');

Route::get('/contacts/{id}/show', [ContactController::class, 'show'])->name('contacts.idGet');

Route::delete('/commitments/{id}', [CommitmentsController::class, 'remove'])->name('commitments.remove');

Route::delete('/contacts/{id}', [ContactController::class, 'remove'])->name('contacts.remove');

});