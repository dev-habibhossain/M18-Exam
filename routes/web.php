<?php

use App\Http\Controllers\ProductController as Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index']);
Route::get('/products', [Controller::class, 'products']);
Route::get('/products/create', [Controller::class, 'create']);
Route::post('/products/store', [Controller::class, 'store']);
Route::get('/products/show/{id}', [Controller::class, 'show']);
Route::get('/products/{id}/edit', [Controller::class, 'edit']);