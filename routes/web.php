<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/quiz', [App\Http\Controllers\QuizController::class, 'index'])->name('index');