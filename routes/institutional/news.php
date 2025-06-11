<?php

use App\Http\Controllers\Institutional\NewsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('news', [NewsController::class, 'index'])
        ->name('news.index');
});