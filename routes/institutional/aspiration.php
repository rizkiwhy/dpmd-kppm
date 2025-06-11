<?php

use App\Http\Controllers\Institutional\AspirationController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('aspiration', [AspirationController::class, 'index'])
        ->name('aspiration.index');
});