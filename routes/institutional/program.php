<?php

use App\Http\Controllers\Institutional\ProgramController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('program', [ProgramController::class, 'index'])
        ->name('program.index');
});