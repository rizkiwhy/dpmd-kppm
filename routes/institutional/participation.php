<?php

use App\Http\Controllers\Institutional\ParticipationController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('participation', [ParticipationController::class, 'index'])
        ->name('participation.index');
});