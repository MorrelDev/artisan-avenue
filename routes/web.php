<?php

use App\Http\Controllers\CrafterController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/crafters', [CrafterController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('crafters');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
