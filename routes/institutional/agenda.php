<?php

use App\Http\Controllers\Institutional\AgendaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('agenda', [AgendaController::class, 'index'])
        ->name('agenda.index');
});