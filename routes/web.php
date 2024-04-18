<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', [FeedbackController::class, 'allData'])->name('Feedback');

Route::get('/create', [FeedbackController::class, 'create'])->name('create');
Route::post('/create', [FeedbackController::class, 'store']);