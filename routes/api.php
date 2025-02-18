<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
// 

Route::get('/roll',[RollController::class, 'index'] );
Route::get('/status', [StatusController::class, 'index']);
Route::get('/store', [StoreController::class, 'show']);
// !@http://localhost:8000/api/users
Route::get('/users', [UserController::class, 'index']);
// http://localhost:8000/api/users/1
Route::get('/users/{user}', [UserController::class, 'show']);
 
Route::post('/users', [UserController::class, 'store']);

Route::put('/users/{user}', [UserController::class, 'update']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);
# http://localhost:8000/api/products
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{product}', [ProductController::class, 'show']);
# http://localhost:8000/api/products
Route::post('/products', [ProductController::class, 'store']);

Route::put('/products/{product}', [ProductController::class, 'update']);

Route::delete('/products/{product}', [ProductController::class, 'destroy']);

# http://localhost:8000/api/orders
Route::get('/orders', [OrderController::class, 'index']);

Route::get('/orders/{order}', [OrderController::class, 'show']);

Route::post('/orders', [OrderController::class, 'store']);

Route::put('/orders/{order}', [OrderController::class, 'update']);

Route::delete('/orders/{order}', [OrderController::class, 'cancel']);