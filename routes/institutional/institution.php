<?php

use App\Http\Controllers\Institutional\InstitutionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('institution', [InstitutionController::class, 'index'])
        ->name('institution.index');
});