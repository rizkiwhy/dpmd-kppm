<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('user', function () {
    return Inertia::render('User');
})->middleware(['auth', 'verified'])->name('user');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/institutional/program.php';
require __DIR__.'/institutional/activity.php';
require __DIR__.'/institutional/agenda.php';
require __DIR__.'/institutional/aspiration.php';
require __DIR__.'/institutional/forum.php';
require __DIR__.'/institutional/institution.php';
require __DIR__.'/institutional/membership.php';
require __DIR__.'/institutional/news.php';
require __DIR__.'/institutional/participation.php';
