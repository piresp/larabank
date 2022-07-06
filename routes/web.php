<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\HomeController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/login', 'login');
});

Route::controller(App\Http\Controllers\BalanceController::class)
    ->prefix('user/balance')
    ->group(function() {
        Route::get('/', 'show');
        Route::get('/incomes', 'incomes');
        Route::get('/expenses', 'expenses');
        Route::get('/purchase', 'purchase');
        Route::get('/transaction', 'transaction');
});

Route::controller(App\Http\Controllers\CheckController::class)
    ->prefix('user/checks/')
    ->group(function() {
        Route::get('/', 'show');
        Route::get('/accepted', 'accepted');
        Route::get('/pendent', 'pendent');
        Route::get('/rejected', 'rejected');
});

Route::controller(App\Http\Controllers\AdminController::class)
    ->prefix('adm')
    ->group(function() {
        Route::get('/index', 'index');
        Route::get('/check_detail', 'check_detail');
});