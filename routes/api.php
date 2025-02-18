<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
// 

Route::get('/roll',[RollController::class, 'index'] );
Route::get('/status', [StatusController::class, 'index']);
Route::get('/store', [StoreController::class, 'show']);
// http://localhost:8000/api/users
Route::get('/users', [UserController::class, 'index']);
// http://localhost:8000/api/users/1
Route::get('/users/{user}', [UserController::class, 'show']);
 
Route::post('/users', [UserController::class, 'store']);

Route::put('/users/{user}', [UserController::class, 'update']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);
