<?php

use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

// Маршрут для отображения формы (метод GET)
Route::get('/userform', [FormProcessor::class, 'index']);

// Маршрут для обработки формы (метод POST)
Route::post('/store_form', [FormProcessor::class, 'store']);
