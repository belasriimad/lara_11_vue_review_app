<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('products', [ProductController::class, 'index']);
Route::get('product/{product}/show', [ProductController::class, 'show']);
Route::post('review/{product}/store', [ReviewController::class, 'store']);
Route::put('review/{product}/{review}/update', [ReviewController::class, 'update']);
Route::post('review/{product}/delete', [ReviewController::class, 'delete']);
