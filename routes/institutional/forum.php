<?php

use App\Http\Controllers\Institutional\ForumController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('forum', [ForumController::class, 'index'])
        ->name('forum.index');
});