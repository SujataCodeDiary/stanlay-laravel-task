<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Authentication Route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Products Routes 
Route::get('/product-list', [ProductController::class, 'index'])->name('index');
Route::get('/product-detail/{id}', [ProductController::class, 'productDetail'])->name('showProductById');
Route::post('/add/update/products', [ProductController::class, 'addAndUpdateProduct'])->name('storeProduct');
Route::delete('/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
