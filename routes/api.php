<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurssController;

Route::get('/kursses', [KurssController::class, 'index']);
Route::post('/kursses', [KurssController::class, 'store']);
