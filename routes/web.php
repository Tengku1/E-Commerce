<?php

use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/detail', [HomeController::class, 'detail']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/Admin', [BackendHomeController::class, 'index']);
