<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'doLogin']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/profile', [PageController::class, 'profile'])->name('profile');




