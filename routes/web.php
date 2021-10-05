<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurrencyController::class, 'index']);
Route::post('convert', [CurrencyController::class, 'convert']);
// Route::get('/', function () {
//     return view('welcome');
// });
