<?php

use App\Http\Controllers\ProductController as Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class, 'index']);

// as exam routes requirement start here...
Route::get('/products', [Controller::class, 'products']);
Route::get('/products/create', [Controller::class, 'create'])->name('products.create');
Route::post('/products/store', [Controller::class, 'store'])->name('products.store');
Route::get('/products/show/{id}', [Controller::class, 'show']);
Route::get('/products/{id}/edit', [Controller::class, 'edit']);
//Route::put('/products/{id}', [Controller::class, 'update']);
//Route::delete('/products/{id}', [Controller::class, 'destroy']);
// exam routes requirement end here...