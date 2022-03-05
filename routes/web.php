<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

Route::get('/stock', [StockController::class, 'list']);
Route::post('/stock/add', [stockController::class, 'add']);