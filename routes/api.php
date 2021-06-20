<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;



// Homepage
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// Category
Route::get('category', [CategoryController::class, 'index']);
Route::get('category/show/{id}', [CategoryController::class, 'show']);
Route::post('category/add', [CategoryController::class, 'store']);


// Products
Route::get('products', [ProductController::class, 'index']);
Route::get('productload', [ProductController::class, 'load']);
Route::get('product/show/{id}', [ProductController::class, 'show']);
Route::post('product/add', [ProductController::class, 'store']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
