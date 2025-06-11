<?php

use App\Http\Controllers\Institutional\MembershipController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('membership', [MembershipController::class, 'index'])
        ->name('membership.index');
});