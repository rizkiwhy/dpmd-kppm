<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
require __DIR__.'/role-based-access-control/user.php';
require __DIR__.'/role-based-access-control/role.php';