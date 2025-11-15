<?php

use App\Http\Controllers\ProductController as Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class, 'index']);

// as exam routes requirement start here...
Route::get('/products', [Controller::class, 'products']);
Route::get('/products/create', [Controller::class, 'create'])->name('products.create');
Route::post('/products', [Controller::class, 'store'])->name('product.store');
Route::get('/products/{id}', [Controller::class, 'show'])->name('product.show');
Route::get('/products/{id}/edit', [Controller::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [Controller::class, 'update'])->name('product.update');
Route::delete('/products/{id}', [Controller::class, 'destroy'])->name('product.destroy');
// exam routes requirement end here...