<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\HomeController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/login', 'login');
});

Route::controller(App\Http\Controllers\UserController::class)
    ->prefix('usr')
    ->group(function() {
        Route::get('/balance', 'index');
        Route::get('/expenses', 'expenses');
        Route::get('/purchase', 'purchase');
        Route::get('/acepted_check', 'acepted_check');
        Route::get('/deposit_check', 'deposit_check');
});

Route::controller(App\Http\Controllers\AdminController::class)
    ->prefix('adm')
    ->group(function() {
        Route::get('/check_list', 'index');
        Route::get('/check_detail', 'check_detail');
});