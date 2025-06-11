<?php

use App\Http\Controllers\RoleBasedAccessControl\RoleController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('role', [RoleController::class, 'index'])
        ->name('role.index');
});