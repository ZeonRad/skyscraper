<?php

use App\Http\Controllers\SkyscraperController;
use App\Models\Skyscraper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//Skyscraper
Route::get('/skyscrapers', [SkyscraperController::class, 'index'])->name('skyscraper.index');
Route::get('/skyscrapers/{id}', [SkyscraperController::class, 'show'])->name('skyscraper.show')->whereNumber('id');
Route::post('/skyscrapers', [SkyscraperController::class, 'store'])->name('skyscraper.store');
Route::put('/skyscrapers/{id}', [SkyscraperController::class, 'update'])->name('skyscraper.update')->whereNumber('id');
Route::delete('/skyscrapers/{id}', [SkyscraperController::class, 'destroy'])->name('skyscraper.destroy')->whereNumber('id');
//Cities
Route::get('/cities', [SkyscraperController::class, 'index'])->name('city.index');
Route::get('/cities/{id}', [SkyscraperController::class, 'show'])->name('city.show')->whereNumber('id');
Route::post('/cities', [SkyscraperController::class, 'store'])->name('city.store');
Route::put('/cities/{id}', [SkyscraperController::class, 'update'])->name('city.update')->whereNumber('id');
Route::delete('/cities/{id}', [SkyscraperController::class, 'destroy'])->name('city.destroy')->whereNumber('id');
