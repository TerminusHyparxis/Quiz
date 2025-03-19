<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;


Route::get('/',[QuizController::class,'index'])->name('home');
Route::get('/quiz-categories',[QuizController::class,'categories'])->name('quiz.categories');
// Route::get('/quiz/{categoryId}',[QuizController::class,'show'])->name('quiz.show');
Route::get('/quiz/{categoryId}', [QuizController::class, 'show'])->name('quiz.show');