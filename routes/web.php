<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;

Route::view('/', 'home')->name('home');

Route::get('/startups', [StartupController::class, 'index'])
    ->name('startups.index');

Route::get('/startups/{id}', [StartupController::class, 'show'])
    ->name('startups.show');

