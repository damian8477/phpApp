<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});



// Trasy do wyświetlenia tekstu i obliczeń
Route::get('/test', [CalculatorController::class, 'test']);  // Wyświetla tekst
Route::get('/add', [CalculatorController::class, 'add']);  // Oblicza sumę
