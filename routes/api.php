<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StoreController;
// 

 Route::get('/roll',[RollController::class, 'index'] );
 Route::get('/status', [StatusController::class, 'index']);
 Route::get('/store', [StoreController::class, 'show']);
