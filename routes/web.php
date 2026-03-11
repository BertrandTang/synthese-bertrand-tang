<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animals')->group(function () {
    Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
    Route::get('/update/{id}', [AnimalController::class, 'update'])->name('animals.update');
    Route::get('/delete/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animals.details');
});

Route::fallback(function () {
    return view('errors.not-found');
});