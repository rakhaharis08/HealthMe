<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/quiz', [App\Http\Controllers\QuizController::class, 'index'])->name('index');
Route::post('/SubmitQuiz', [App\Http\Controllers\QuizController::class, 'store'])->name('index');
Route::get('/results', function () {
    return view('quiz.results');
})->name('results');