<?php

use App\Http\Controllers\RoleBasedAccessControl\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('user', [UserController::class, 'index'])
        ->name('user.index');
});