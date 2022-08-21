<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [QuizController::class,'list'])->name('quiz-list');
//Quiz Routes
Route::get('/new-quiz', [QuizController::class,'view'])->middleware(['auth'])->name('new-quiz');
Route::post('/store-quiz', [QuizController::class,'store'])->middleware(['auth'])->name('store-quiz');
Route::get('/{id}/view-quiz', [QuizController::class,'show'])->middleware(['auth'])->name('show-quiz');
Route::post('/submit-quiz', [QuizController::class,'submitQuiz'])->middleware(['auth'])->name('submit-quiz');
Route::get('/{id}/quiz-result', [QuizController::class,'result'])->middleware(['auth'])->name('quiz-result');
// Route::get('/quiz', [QuizController::class,'list'])->name('quiz-list');

//Question Routes
Route::get('/{id}/new-question/', [QuestionController::class,'view'])->name('new-question');
Route::post('/store-question', [QuestionController::class,'store'])->name('store-question');

Route::get('/dashboard', [QuizController::class,'resultList'])->middleware(['auth'])->name('dashboard');
Route::get('dailt-report', [QuizController::class,'dailyReport']);
require __DIR__.'/auth.php';
