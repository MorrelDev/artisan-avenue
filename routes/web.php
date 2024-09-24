<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/build-check', function () {
    $files = File::allFiles(public_path('build'));

    $fileList = [];
    foreach ($files as $file) {
        $fileList[] = $file->getRelativePathname();
    }

    return response()->json($fileList);
});

require __DIR__.'/auth.php';
