<?php

use App\Http\Controllers\Institutional\ActivityController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('activity', [ActivityController::class, 'index'])
        ->name('activity.index');
});