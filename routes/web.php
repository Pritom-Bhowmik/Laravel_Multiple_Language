<?php

use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Localization Route 
Route::get('/locale/{lange}', [LocalizationController::class, 'setLang']);